<?php


session_start();

require("config.php");

if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {

header("Location: " . $config_basedir);

}

 

if($_POST['submit'])

{
$loginsql = "SELECT * FROM members WHERE name = '" . $_POST['userBox']. "' AND password = '" . sha1($_POST['passBox']) . "'";

$loginres = mysql_query($loginsql);

$numrows = mysql_num_rows($loginres);

if($numrows == 1)

{

$loginrow = mysql_fetch_assoc($loginres);

session_register("SESS_LOGGEDIN");

session_register("SESS_USERNAME");

session_register("SESS_USERID");

$_SESSION['SESS_LOGGEDIN'] = 1;

$_SESSION['SESS_USERNAME'] = $loginrow['username'];

$_SESSION['SESS_USERID'] = $loginrow['id'];

$ordersql = "SELECT oder_id FROM orders WHERE oder_id = " . $_SESSION['SESS_USERID'] . " AND status < 2"; $orderres = mysql_query($ordersql); $orderrow = mysql_fetch_assoc($orderres); session_register("SESS_ORDERNUM"); $_SESSION['SESS_ORDERNUM'] = $orderrow['id']; header("Location: " . $config_basedir);

}

else {

header("Location: http://" .$_SERVER['HTTP_HOST']. $_SERVER['SCRIPT_NAME'] . "?error=1");

}

}

else {

require("header.php");

?>


<h1>Customer Login</h1>



Please enter your username and password to log into the websites. If you do not have an account, you can get one for free by <a href="register.php">registering</a> or <a href="index.php">visit site</a>.

 

<?php

if(isset($_GET['error'])) {

echo "<strong>Incorrect username/password</strong>";

}

?>

<form action="<?php $_SERVER['SCRIPT_NAME']; ?><br />" method="POST">

<table>

<tbody>

<tr>

<td>Username</td>

<td><input type="textbox" name="userBox" /></td>

</tr>

<tr>

<td>Password</td>

<td><input type="password" name="passBox" /></td>

</tr>

<tr>

<td></td>

<td><input type="submit" name="submit" value="Log in" /></td>

</tr>

</tbody>

</table>

</form>

 

<?php

}

require("footer.php");

?>
<!----Take a moment to review the following interesting points about login.php:

Move to the start of the file and begin adding the code:

1------->
<?php

session_start();
 

require("config.php");

 

if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {

 

header("Location: " . $config_basedir);
 

}


if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {

 

header("Location: " . $config_basedir);

 

}

 

if($_POST['submit'])

 

{

 

$loginsql = "SELECT * FROM members WHERE name = '" . $_POST['userBox'] . "' AND password = '" . $_POST['passBox'] . "'";

 

$loginres = mysql_query($loginsql);

 

$numrows = mysql_num_rows($loginres);

 

if($numrows == 1)

 

{

 

$loginrow = mysql_fetch_assoc($loginres);

 

session_register("SESS_LOGGEDIN");

 

session_register("SESS_USERNAME");

 

session_register("SESS_USERID");

 

$_SESSION['SESS_LOGGEDIN'] = 1;

 

$_SESSION['SESS_USERNAME'] = $loginrow['username'];

 

$_SESSION['SESS_USERID'] = $loginrow['id'];

 

$ordersql = "SELECT order_id FROM orders WHERE oder_id = " . $_SESSION['SESS_USERID'] . " AND status < 2";

 

$orderres = mysql_query($ordersql);

 

$orderrow = mysql_fetch_assoc($orderres);

 

session_register("SESS_ORDERNUM");

 

$_SESSION['SESS_ORDERNUM'] = $orderrow['id'];

 

header("Location: " . $config_basedir);

 

}

 

else

 

{

 

header("Location: http://" .$_SERVER['HTTP_HOST']. $_SERVER['SCRIPT_NAME'] . "?error=1");

 

}

 

}

?>
