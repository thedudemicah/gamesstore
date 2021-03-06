<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Seabelo Travel Reservation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

								<h2>Seabelo Group Checkout Form</h2>
								
 <form id="booking-form" class="booking-form" name="form1"  action="conn.php" method="post">
            <div align="center"><img class="logo" src="img/itowers.png" title="Seabelo Logo" alt="Seabelo Logo"></div>
            <div class="h1">Reservation Form</div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            
			</div>
            <div id="form-content">
                <div class="group">
                    <label for="date-from">From</label>
                    <div class="addon-right">
                        <input id="date-from" name="date-from" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <div class="group">
                    <label for="date-to">To</label>
                    <div class="addon-right">
                        <input id="date-to" name="date-to" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <div class="group">
                    <label for="pac_type">Package type</label>
                    <div>
                        <select id="pac_type" name="pac_type" class="form-control">
                            <option input type="text" value="type-1">Drop Off</option>
							 <option input type="text" value="type-2">1 Day Trip</option>
							  <option input type="text" value="type-3">2 Day Trip</option>
                            <option input type="text" value="type-4">3 Day Trip</option>
							<option input type="text" value="type-5">A week's Trip</option>
							  
                          
                        </select>
                    </div>
                </div>
				<div class="group">
                    <label for="where."></label>
                    <div>
                        <select id="where." name="where." class="form-control">
                            <option input type="text" value="1">Where Do You Want To Go?</option>
							 <option input type="text" value="2">South Africa, P.E</option>
							  <option input type="text" value="3">Zimbabwe, Harare</option>
                            <option input type="text" value="4">Zambia, Maputo</option>
							<option input type="text" value="5">Namibia, Windoek</option>
							  <option input type="text" value="6">Mozambique</option>
                            <option input type="text" value="7">Swaziland</option>
							<option input type="text" value="8">Malawi</option>
                          
                        </select>
                    </div>
                </div>
        
                
                
                <div class="group">
                    <label for="adults">Adults</label>
                    <div>
                        <select id="adults" name="adults" class="form-control">
                           <option input type="int" value="1">1</option>
                            <option input type="int" value="2">2</option>
                            <option input type="int" value="3">3</option>
                            <option input type="int" value="4">4</option>
							<option input type="int" value="5">5</option>
                            <option input type="int" value="6">6</option>
                            <option input type="int" value="7">7</option>
                            <option input type="int" value="8">8</option>
							<option input type="int" value="9">9</option>
                            <option input type="int" value="10">10</option>
                            <option input type="int" value="11">11</option>
                            <option input type="int" value="12">12</option>
							<option input type="int" value="13">13</option>
                            <option input type="int" value="14">14</option>
                            <option input type="int" value="15">15</option>
                            <option input type="int" value="16">16</option>
							<option input type="int" value="17">17</option>
                            <option input type="int" value="18">18</option>
                            <option input type="int" value="19">19</option>
                            <option input type="int" value="20">20</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="children">Children</label>
                    <div>
                        <select id="children" name="children" class="form-control">
                            <option input type="int" value="-">-</option>
                            <option input type="int" value="1">1</option>
                            <option input type="int" value="2">2</option>
                            <option input type="int" value="3">3</option>
                            <option input type="int" value="4">4</option>
							<option input type="int" value="5">5</option>
                            <option input type="int" value="6">6</option>
                            <option input type="int" value="7">7</option>
                            <option input type="int" value="8">8</option>
							<option input type="int" value="9">9</option>
                            <option input type="int" value="10">10</option>
                            <option input type="int" value="11">11</option>
                            <option input type="int" value="12">12</option>
							<option input type="int" value="13">13</option>
                            <option input type="int" value="14">14</option>
                            <option input type="int" value="15">15</option>
                            <option input type="int" value="16">16</option>
							<option input type="int" value="17">17</option>
                            <option input type="int" value="18">18</option>
                            <option input type="int" value="19">19</option>
                            <option input type="int" value="20">20</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="name">Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
                </div>
                <div class="group">
                    <label for="phone">Phone</label>
                    <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Phone"></div>
                </div>
                <div class="group">
                    <label for="special_requirements">Special requirements</label>
                    <div><textarea id="special_requirements" name="special_requirements" class="form-control" cols="5" rows="5" placeholder="Special requirements"></textarea></div>
                </div>
				</div>

<div class="row"> </div>
  <div class="col-75"> </div>
    <div class="container">
	
  
      
       
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cardname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="Micah T. G. Seitshiro">
            <label for="acc_num">Credit card number</label>
            <input type="text" id="acc_num" name="acc_num" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" action="conn.php">
      </form>
	
	  
  
  
  
  <div class="col-25" >
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
       <p><a href="#">Corporate Business Package</a> <span class="price">P5000.00</span></p>
       <hr>
      <p>Total <span class="price" style="color:black"><b>P5000.00</b></span></p>
    </div>
	
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
  </div>


</body>
</html>
