<?php
session_start();
if (!isset($_SESSION['email']))
	header('location:index.php')
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
   <br>
   <br>
   <br>




			<div class="container-fluid">
			<?php include("navbar-after-login"); ?>
				<form action="confirm.php" method="get">
				
				<div class="row">
						
						<div class="col-lg-4"  style="background-color:lavender;">
							<div class="panel panel-default">
							<div class="panel-heading">
							<div class="panel-title">#1</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple10.jpg" height="300px" alt="Items"/> </center>
								<p>Apple iPhone 7 Plus (Silver, 128GB) Rs:85000.<br>
								12MP primary camera,5.5-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1920x1080 resolution,water and dust resistant</p>
								<a href="cart-script.php?id=1&add=add" role="button" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(1);
								?>
								</a>
							</div>
							</div>
						</div>
			
			
						<div class="col-lg-4" style="background-color:lavender;">
							<div class="panel panel-default">
							<div class="panel-heading">
							<div class="panel-title">#2</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple3.jpg" height="300px" alt="Items"/> </center>
								<p> Apple iPhone 7 Plus (rose, 128GB) Rs:83000.<br> 
								12MP primary camera,5.5-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1920x1080 resolution,water and dust resistant</p>
								<a href="cart-script.php?id=1&add=add" role="button" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(2);
								?>
								</a>
							</div>
							</div>
						</div>
			
						<div class="col-lg-4" style="background-color:lavender;">
							<div class="panel panel-default">
							<div class="panel-heading">
							<div class="panel-title">#3</div>
							</div>
							<div class="panel-body">
								<center><img src="images/apple5.jpg" height="300px" width="380px" alt="items"/> </center>
								<p>Apple iPhone 7 Plus (gold, 128GB) Rs:80000.<br> 
								12MP primary camera,5.5-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1920x1080 resolution,water and dust resistant</p>
								<a href="cart-script.php?id=1&add=add" role="button" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(3);
								?>
								</a>
							</div>
							</div>
						</div>
				</div>
			
					<div class="row" style="margin-top:80px;">
							
							<div class="col-lg-4" style="background-color:lavender;">
								<div class="panel panel-default">
								<div class="panel-heading">
								<div class="panel-title">#4</div>
								</div>
								<div class="panel-body">
									<center><img src="images/apple10.jpg" height="300px" alt="Items"/> </center>
									<p>Apple iPhone 7 Plus (Silver, 64GB) Rs:65000.<br> 
									12MP primary camera,5.5-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1920x1080 resolution,water and dust resistant</p>
									<a href="cart-script.php?id=1&add=add" role="button" name="add" value="add" class="btn btn-primary btn-block">
									<?php
									require_once("add-or-added.php");
									echo message(4);
									?>
									</a>
								</div>
								</div>
							</div>
    
	
	
							<div class="col-lg-4" style="background-color:lavender;">
							<div class="panel panel-default">
								<div class="panel-heading">
								<div class="panel-title">#5</div>
								</div>
								<div class="panel-body">
								<center><img src="images/apple3.jpg" height="300px" alt="Items"/></center>
								<p>Apple iPhone 7 Plus (rose, 64GB) Rs:63000.<br> 
								12MP primary camera,5.5-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1920x1080 resolution,water and dust resistant</p>
								<a href="cart-script.php?id=1&add=add" role="button" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(5);
								?>
								</a>
								</div>
							</div>
							</div>
				
							<div class="col-lg-4" style="background-color:lavender;">
							<div class="panel panel-default">
								<div class="panel-heading">
								<div class="panel-title">#6</div>
								</div>
								<div class="panel-body">
								<center><img src="images/apple5.jpg" height="300px" width="380px" alt="Items"> </center>
								<p>Apple iPhone 7 Plus (gold, 64GB) Rs:60000.<br> 
								12MP primary camera,5.5-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1920x1080 resolution,water and dust resistant</p>
								<a href="cart-script.php?id=1&add=add" role="button" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(6);
								?>
								</a>
								</div>
							</div>
							</div>
					</div>
				</form>
			</div>
</body>
</html>
<br>
<br>


	
	

	

	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>