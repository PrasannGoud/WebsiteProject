<?php
	session_start();
	if(!isset($_SESSION['email']))
	header('location:index.php');
?>
<?php
error_reporting(0);
$id = $_POST['itemsid'];
$to = $_SESSION['email'];
$subject = "Test mail";
$message = "Your order has been confirmed. Your items will be delivered soon !";
mail($to, $subject, $message, "");
// Mail to the item owner
$to_owner = "owner@prasanne.com";
$subject_owner = "New Order";
$message_owner = "New Order made by ".$to."<br>The Items id are: ";
$message_owner = $message_owner.$_POST['itemsid'];
mail($to_owner, $subject_owner, $message_owner, "");
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
  
  
  
  

			<div class="container">
					<?php  include('navbar-after-login.php'); ?>
				<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
					<h5 align="center">Thank you for ordering from E-store. The order shall be delivered to you shortly.</h5>
					<br>
					<p align="center">
					Order some more electronic items
					<a href="home.php" style="color:#0000ff";>here. </a>
					</p>
				</div>
			</div>
	
	
	
   

   
   
   
   
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>