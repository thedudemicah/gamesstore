<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<div align="center"><img class="logo" src="img/gamelogo.png" title="Game Logo"></div>
    <title>Login</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
</head>
<body>
<?php
 $login_form = <<<EOD
<form name="login" id="login" method="POST" action="check_login.php">
<p><label for="username">Please Enter Username: </label><input type="text" size="100" name="username" id="username" placeholder="Enter Username here" /></p>
<p><label for="password">Please Enter Password: </label><input type="password" size="40" name="password" id="password" placeholder="Enter Password" /></p>
<p><input type="submit" name="submit" id="submit" value="Submit"/> <input type="reset" name="reset" id="reset" value="reset"/></p>
</form>
EOD;

echo "<h1>Please enter your Login Information</h1>";
echo $login_form;
?>
<footer class="container"><div class="row"><div class="col">
	&copy; 2018 Copyright Massdiscounters (Pty) Limited trading as Game Store. All rights reserved. Follows Us On <a href="#" class="fa fa-rss"></a>
<a href="#" class="fa fa-twitter"></a> <a href="#" class="fa fa-facebook"></a> @GameStoreBW <br><br>
 <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
<div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading"><h4>Contact Details</h4></div>

                            <!-- List group -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="list-group-item-heading">Store Manager </h5>
                                    Nothando Mwelase

                                </li>
                                <li class="list-group-item">
                                    <a class=" pull-right btn btn-warning btn-xs" href="tel:+2672415669">Call</a>
                                    <h5 class="list-group-item-heading">Phone</h5>
                                    <a href="tel:+2672415669" class="alert-link">+ 267 3659800</a>

                                </li>

                                <li class="list-group-item">
                                    <a class=" pull-right btn btn-warning btn-xs" href="mailto:gamefrancistown@mdd.co.za">Email</a>
                                    <h5 class="list-group-item-heading">Email</h5>
                                    <a href="mailto:gamegaborone@mdd.co.za" class="alert-link">gamegaborone@mdd.co.za</a>

                                </li>

                               

                            </ul>
                        </div>


	</div></div></footer>
</body>
</html>