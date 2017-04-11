
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ShopEasy.com SignUp</title>
  <link href="modify.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div class="background"
  
  </div>
  <div class="top-info">
    <div class="inner-bg">
      <div class="container">
        <div class="row">
          <div class=col-sm-8 col-sm-offset-2 text>        
    				<h1 align="left">Shopeasy</h1>
  				</div>
        </div>
      </div>
  
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
		<div class="form-top">
			<div class="form-top-left">
			  <p>Enter details of item to be modified</p>
			</div>
		  </div>
        <form role="form" action="modify_process.php" method="POST" class="login-form" id="item-form">
          <div class="form-group">
		    <label for="form-name">Name:<br />
            <input type="text" name="form-name" placeholder="Enter item name..." class="form-name" "form-control" id="form-name">
	<br />
			<label for="form-location">Location:<br />
            <input type="text" name="form-location" placeholder="Enter location..." class="form-location" "form-control" id="form-location">
	<br />
            		    		<label for="form-benefits">Benefits:<br />
            <input type="text" name="form-benefits" placeholder="Enter benefits..." class="form-benefits "form-control" id="form-benefits">
	<br />
			<label for="form-cost">Cost:<br />
            <input type="text" name="form-cost" placeholder="Enter Cost..." class="form-cost" "form-control" id="form-cost">
	<br />
			<label for="form-replace">Item to be replaced:<br />
            <input type="text" name="form-replace" placeholder="Enter name of item to be replaced..." class="form-replace" "form-control" id="form-replace">
	<br />
			<label for="form-category">Category:<br /> 
          	<div class="drop" form="item-form">
		<select name="form-category" form="item-form" size="2">
		<option value="Fruits">Fruits</option>
		<option value="Vegetables">Vegetables</option>
		<option value="Organic Fruits">Organic Fruits</option>
		<option value="Organic Vegetables">Organic Vegetables</option>
		<option value="Dairy Products">Dairy Products</option>
		<option value="Pulses">Pulses</option>
		
		</select>
		</div>

          </div>
          	<div class="form-group-btn">
	<input type="submit" value="Modify Item">
	</div>
        </form>
     </div>
    </div>
   </div>
  </div> 
</body>
</html>