<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopEasy.com</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="style-login.css" type="text/css" rel="stylesheet"/>
</head>

<body>

  <div class="top-info">
    <div class="inner-bg">
      <div class="container">
        <div class="row">
          <div class=col-sm-8 col-sm-offset-2 text>   
			<h1 align="center">Welcome to ShopEasy</h1>     
    				<h2 align="left">ShopEasy</h2>
					<script src="js/jquery-1.11.3.min.js"></script>
					<script src="js/bootstrap.min.js"></script>
  				</div>
        </div>
      </div>
  
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
      <div class="form-top">
        <div class="form-top-left">
          <h3>Admin Login</h3> 
          <p>Enter your username and password</p>
        </div>
      </div>
      <div class="form-bottom">
        <form role="form" action="login_process.php" method="POST" class="login-form">
          <div class="form-group">
            <label for="form-username">Username:<br />
            <input type="text" name="form-username" placeholder="Enter username..." class="form-username" "form-control" id="form-username">
          </div>
          <div class="form-group">
            <label for="form-password">Password:<br />
              <input type="password" name="form-password" placeholder="Enter Password..." class="form-password" "form-control" id="form-password">
           </div>
	<div class="form-group-btn">
            <input type="submit" value="SignIn">
        </div>
        </form>
       </div>
     </div>
    </div>
   </div>
  </div>
			<a id="create"
			href="signup.php" target="_blank"> No SignIn? Create a Login here! </a>
</body>
</html>