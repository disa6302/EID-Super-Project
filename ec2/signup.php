
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ShopEasy.com SignUp</title>
  <link href="style-signup.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div class="background"
  
  </div>
  <div class="top-info">
    <div class="inner-bg">
      <div class="container">
        <div class="row">
          <div class=col-sm-8 col-sm-offset-2 text>        
    				<h1 align="left">SignUp</h1>
  				</div>
        </div>
      </div>
  
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
		<div class="form-top">
			<div class="form-top-left">
			  <p>Enter your information</p>
			</div>
		  </div>
        <form role="form" action="signup_process.php" method="POST" class="login-form">
          <div class="form-group">
		    <label for="form-firstname">First Name:<br />
            <input type="text" name="form-firstname" placeholder="Enter firstname..." class="form-firstname" "form-control" id="form-firstname">
	<br />
			<label for="form-lastname">Last Name:<br />
            <input type="text" name="form-lastname" placeholder="Enter lastname..." class="form-lastname" "form-control" id="form-lastname">
	<br />
            <label for="form-username">Username:<br />
            <input type="text" name="form-username" placeholder="Enter username..." class="form-username" "form-control" id="form-username">
          </div>
          <div class="form-group">
            <label for="form-password">Password:<br />
              <input type="password" name="form-password" placeholder="Enter Password..." class="form-password" "form-control" id="form-password">
           </div>
	<div class="form-group-btn">
	<input type="submit" value="SignUp">
	</div>
        </form>
     </div>
    </div>
   </div>
  </div> 
</body>
</html>