<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
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
		<div class="container-fluid">
		<?php include("navbar-after-login.php"); ?>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">>
				<h4> Change Password </h4>
					<form action="settings_script.php" method="POST">
						<div class="form-group">
							<input type="password" class="form-control" id="old-password" placeholder="Old Password" required="true"><br>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" placeholder="New Password" required="true"><br>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" placeholder="New Password" required="true">
						</div>
						<button type="submit" class="btn btn-primary">change</button>
						 <?php
									echo "<b>".$_GET['error']."</b>";
							?>
				</form>
				</div>
			</div>
		</div>
  
  
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	
  </body>   
</html>