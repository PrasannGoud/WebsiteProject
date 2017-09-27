<?php
session_start();
error_reporting(0);
if(isset($_SESSION['email'])
{
	header('location: index.php');
}
require('connection.php')
?>




<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Welcome</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   

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
				  <?php include("navbar-after-login"); ?>
					<div class="row" style="margin-top:80px;">
						<div class="col-lg-4 col-lg-offset-4">
							<table class="table table-striped">
								<thead>
									<tr>
									<center>
									<th>Item Number</th>
									<th>Price</th>
									</center>
									</tr>
								</thead>
							
								<?php
								$sum=0;
								$query="SELECT PID, Price FROM items Where cart=1";
								$result=mysqli_query($con,$query)
								while($row = mysqli_fetch_array($result))
								{
									$sum+= $row["price"];
									$id = $row["PID"].",";
									echo "<tr><td>"."#".$row["PID"]."</td> <td>".$row["Price"]."</td> <td><a href='remove.php?id={$row['PID']}' style='color:#0000ff;'> Remove</a></td></tr>";
								}
								echo "<tr><td>Total</td> <td>".$sum."</td> <td><a href='success.php?itemsid=".$id."' class='btn btn-primary'> Confirm</a></td></tr>";
								?>
							</table>
						</div>
					</div>
				</div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>