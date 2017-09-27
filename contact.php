<?php
	session_start();
	if(isset($_SESSION['email']))
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


  <body>
	

		<div class="container">
			<?php include("navbar-before-login.php"); ?>

			<div class="container text-justify"> 
				<div class="container-fluid">
						<div class="row">
							<div class="col-lg-10"><h1>LIVE SUPPORT</h1>
								<P> <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4></p>
								<br>
								<p> It is a long established fact that a reader will be distracted by the readable contact of a page when looking at its layout. The point of using Lorem ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lrem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
							</div>
							
							<div class="col-lg-2">
								<center>
								<img src="images/contactus1.jpg" alt="Contact Us">
								</center>
							</div>
						</div>
				
					<div class="container-fluid">
						<div class="row">
						<div class="col-lg-8" style="margin-bottom:10px;">
							<h2> CONTACT US </h2>
										<form role="form" action="contact_script.php" method="POST">
										<div class="form-group">
											<label>Name:</label>
											<input type="text" class="form-control" name="name" required="true">
										<div class="form-group">
											<label>Email:</label>
											<input type="email" class="form-control" name="e-mail" required="true">
											<?php echo $_GET['m1'];?>
										</div> 
										<div class="form-group">
											<label>Message:</label>
											<textarea class="form-control" rows="5" name="message" required="true"></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
										</form>
										</div>
							</div>
								
							<div class="col-lg-4">
								<h2> Company Information: </h2>
								<p>500 PrasannE </p>
								<p>Pennsylvania,</p>
								<p>USA <p>
								<p>Phone:(00) 222 888 555</p>
								<p>Fax: (888) 888 88 88 8 </p>
								<p> Email: info@prasanne.com </p>
								<p>Follow on: Facebook, Twitter </p
							</div>
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
	
					<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
						<div class="container">
							<div class="container-fluid">
									<div class="row">
											<div class="col-sm-4">
												<div class="navbar-text">
													<h4>Information</h4>
													<a href="about.php">About Us</a> 
													<br>
													<a href="contact.php">Contact Us </a>
												</div>
											</div>
							
							
											<div class="col-sm-4">
												<div class="navbar-text">
													<h4>My Account</h4>
													<div><a href="#Login" data-toggle="modal">Login</a></div>
													<div><a href="signup.php">Sign Up </a></div>
													</div>
											</div>
							
											<div class="col-sm-4">
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
	</div>
	
		
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>