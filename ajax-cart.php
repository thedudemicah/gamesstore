<?php
// START THE SESSION
session_start();

// CONFIGURATION
require("config.php");

// CONNECT TO DB
$pdo = new PDO(
	"mysql:host=$host;dbname=$dbname;charset=$charset", 
	$user, $password, [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
	]
);

// PROCESS REQUESTS
switch ($_POST['request']) {
	case "add":
		// ITEMS WILL BE STORED IN THE ORDER OF
		// $_SESSION['cart'][PRODUCT ID] = QUANTITY
		if (is_numeric($_SESSION['cart'][$_POST['product_id']])) {
			$_SESSION['cart'][$_POST['product_id']]++;
		} else {
			$_SESSION['cart'][$_POST['product_id']] = 1;
		}
		break;

	// THIS PART COULD BE DONE BETTER BUT I WILL JUST LEAVE IT AS TO SIMPLIFY THINGS
	case "show":
		// FETCH PRODUCTS
		$stmt = $pdo->query('SELECT * FROM `products`');
		$products = array();
		while ($row = $stmt->fetch()){
			$products[$row['product_id']] = $row;
		}

		// SPIT OUT THE CART IN HTML
		$sub = 0;
		$total = 0; ?>
		<h1>MY CART</h1>
		<table class="table table-striped">
			<tr>
				<th>Qty</th>
				<th>Item</th>
				<th>Price</th>
			</tr>
			<?php
			foreach($_SESSION['cart'] as $id=>$qty) {
				// CALCULATE THE TOTALS
				$sub = $qty * $products[$id]['product_price'];
				$total += $sub;

				// THE PRODUCT
				printf("<tr><td><input id='qty_%u' onchange='qtyCart(%u);' type='text' value='%u'/></td><td>%s</td><td>$%0.2f</td></tr>",
					$id, $id, $qty,
					$products[$id]['product_name'],
					$sub
				);
			}
			?>
			<tr>
				<td></td>
				<td><strong>Grand Total</strong></td>
				<td><strong>$<?=$total?></strong></td>
			</tr>
			<?php if($total>0){ ?>
			<tr>
				<td colspan="2"></td>
				<td>
					Name <input type="text" id="co_name" placeholder="Micah T. G. Seitshiro"/><br><br>
					Email <input type="text" id="co_email" placeholder="micah.seitshiro@botho.ac.bw"/><br><br>
					CardName <input type="text" id="co_cardname" placeholder="Micah T. G. Seitshiro"/><br><br>
					CardNumber <input type="int" id="co_cardnumber" placeholder="1111-2222-3333-4444"/><br><br>
					CVV: <input type="int" id="co_cvv" placeholder="352"/><br><br>
					ExpMonth <input type="text" id="co_expmonth" placeholder="February"/><br><br>
                    ExpYear" <input type="int" id="co_expyear" placeholder="2018"/><br><br>
					
					<input type="button" class="btn btn-success" value="Checkout" onclick="cartCheckout();"/>
					<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing

				</td>
			</tr>
			<?php } ?>
		</table>
		<?php
		break;

	case "qty":
		if ($_POST['qty']==0) {
			unset($_SESSION['cart'][$_POST['product_id']]);
		} else {
			$_SESSION['cart'][$_POST['product_id']] = $_POST['qty'];
		}
		break;

	// NO ERROR & SECURITY CHECKS IN THIS SIMPLE EXAMPLE...
	// BEEF UP THIS SECTION IF YOU WANT
	case "checkout":
		// CREATE THE ORDER
		$sql = sprintf("INSERT INTO `orders` (`order_name`, `order_email`, `name_on_card`, `card_number`, `cvv`, `exp_month`, `exp_year`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')", 
			$_POST['name'], $_POST['email'], $_POST['cardname'], $_POST['cardnumber'], $_POST['cvv'], $_POST['expmonth'], $_POST['expyear']
		);
		$pdo->exec($sql);
		$last_id = $pdo->lastInsertId();

		// INSERT THE ITEMS
		$sql = "INSERT INTO `orders_items` (`order_id`, `product_id`, `quantity`) VALUES ";
		foreach ($_SESSION['cart'] as $id=>$qty) {
			$sql .= sprintf("(%u,%u,%u),", $last_id, $id, $qty);
		}
		$sql = substr($sql,0,-1);	// STRIP LAST COMMA
		$sql .= ";";
		$pdo->exec($sql);

		// CLEAR OUT THE CURRENT CART
		$_SESSION['cart'] = array();
		break;
}
?>