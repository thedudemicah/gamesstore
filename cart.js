function hideMessage(){
// hideMessage() : hides the system message bar

	$('#alert').hide().html("");
}

function addToCart(id){
// addToCart() : add an item to the cart
// PARAM id : product id

	$.ajax({
		url: "ajax-cart.php",
		method: "POST",
		data: { 
			product_id:id,
			request:"add"
		}
	}).done(function() {
		$('#alert').html("Item added").show();
		setTimeout(hideMessage, 2000);
	});
}

function toggleCart(){
// toggleCart() : show/hide the cart

	var cart = $('#cart'),
		products = $('#products');
	// CART IS OPEN
	// HIDE CART, SHOW PRODUCTS
	if (cart.is(":visible")) {
		cart.hide();
		products.show();
	}

	// CART IS CLOSED
	// HIDE PRODUCTS, SHOW CART
	else {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			dataType: "html",
			data: { 
				request:"show"
			}
		}).done(function(res) {
			products.hide();
			cart.html(res).show();
		});
	}
}

function qtyCart(id){
// qtyCart() : change product quantity
// PARAM id : product id

	var qty = parseInt($('#qty_'+id).val());
	if ($.isNumeric(qty)) {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request:"qty",
				product_id:id,
				qty:qty
			}
		}).done(function(res) {
			$('#alert').html("Quantity changed").show();
			setTimeout(hideMessage, 2000);
			$('#cart').hide();
			toggleCart();
		});
	} else {
		alert("Please enter a valid number");
	}
}


function cartCheckout(){
// cartCheckout() : process checkout

	// GET CUSTOMER DETAILS
	var name = $('#co_name').val(),
	    email = $('#co_email').val(),
		cardname = $('#co_cardname').val(),
	    cardnumber = $('#co_cardnumber').val(),
		cvv = $('#co_cvv').val(),
	    expmonth = $('#co_expmonth').val(),
		expyear = $('#co_expyear').val(),
	    err = "";

	// FORM CHECK
	if (name=="") { err += "Please enter your name\n"; }
	if (email=="") { err += "Please enter your email\n"; }
	if (cardname=="") { err += "Please enter your name on card\n"; }
	if (cardnumber=="") { err += "Please enter your card number\n"; }
	if (cvv=="") { err += "Please enter your cvv number\n"; }
	if (expmonth=="") { err += "Please enter month of expiry\n"; }
	if (expyear=="") { err += "Please enter year of expiry\n"; }
	if (err=="") {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request : "checkout",
				name : name,
				email : email,
				cardname : cardname,
				cardnumber : cardnumber,
				cvv : cvv,
				expmonth : expmonth,
				expyear : expyear
				
			}
		}).done(function(res) {
			$('#cart').html("THANK YOU! We have received your order");
			
		});
	} else {
		alert(err);
	}
}