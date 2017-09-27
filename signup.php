<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
	error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>

			<div class="container text-justify"> 
				<div class="container-fluid">
				<?php include("navbar-before-login.php"); ?>
				<div class="container">
					<div class="row">
							<div class="col-lg-8" style="margin-bottom:10px;">
								<img src="images/signup.jpg">
							</div>

							<div class="col-lg-4">
								<h2 style="color:#000;">SIGN UP </h2>
								<form  action="signup_script.php" method="POST">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Name" required="true">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="e-mail" placeholder="Email" required="true"><?php echo $_GET['m1'];?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Password" required="true">
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name="contact" placeholder="Contact" required="true"><?php echo $_GET['m2'];?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="city" placeholder="city" required="true">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="address" placeholder="Address" required="true">
									</div>
									<button type="submit" class="btn btn-primary pull-right">Sign Up</button>
								</form>
								<br>	
							</div>
					</div>
				</div>
				</div>
			</div>
	<br>
	<br>	
	<br>
	<br>
	<br>
	<br>
	<br>

	
	
	
				<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
				<div class="container">
				<div class="container-fluid">
					<div class="row">
							<div class="col-lg-4">
								<div class="navbar-text">
									<h4>Information</h4>
									<a href="about.php">About us</a> 
									<br>
									<a href="contact.php">Contact Us </a>
								</div>
							</div>
			
							<div class="col-lg-4">
								<div class="navbar-text">
									<h4>My Account</h4>
									<a href="#Login" data-toggle="modal">Login</a><br>
									<a href="signup.php">Sign Up </a>
								</div>
							</div>
				
							<div class="col-lg-4">
								<div class="navbar-text">
									<h4>Contact Us</h4>
									<h5> contact:+91-143-555555 </h5>
								</div>
							</div>
					</div>
				</div>
				</div>
				</div>
				<?php include("modal.php"); ?>

	
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>