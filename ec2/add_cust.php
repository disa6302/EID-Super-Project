
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ShopEasy.com SignUp</title>
  <link href="style-addcust.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div class="background"
  
  </div>
  <div class="top-info">
    <div class="inner-bg">
      <div class="container">
        <div class="row">
          <div class=col-sm-8 col-sm-offset-2 text>        			
				<h1 align="left">ShopEasy</h1>
				<script src="js/jquery-1.11.3.min.js"></script>
				<script src="js/bootstrap.min.js"></script>

  	  </div>
        </div>
      </div>
  
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
		<div class="form-top">
			<div class="form-top-left">
			  <p>Enter customer details</p>
			</div>
		  </div>
        <form role="form" action="customer_process.php" method="POST" class="login-form">
          <div class="form-group">
		    <label for="form-firstname">First Name:<br />
            <input type="text" name="form-firstname" placeholder="Enter firstname..." class="form-firstname" "form-control" id="form-firstname">
	<br />
			<label for="form-lastname">Last Name:<br />
            <input type="text" name="form-lastname" placeholder="Enter lastname..." class="form-lastname" "form-control" id="form-lastname">
	<br />
            		<label for="form-rfid">RFID:<br />
            <input type="text" name="form-rfid" placeholder="Format: 0.0.00.00" class="form-rfid" "form-control" id="form-rfid"> 
	<br />
	    		<label for="form-credits">Credit Points:<br />
            <input type="text" name="form-credits" placeholder="Enter Credit Points #..." class="form-credits" "form-control" id="form-credits">
          </div>
          	<div class="form-group-btn">
	<input type="submit" value="Add Customer">
	</div>
        </form>
     </div>
    </div>
   </div>
  </div> 
</body>
</html>