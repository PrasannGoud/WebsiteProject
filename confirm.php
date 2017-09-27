<?php 
	error_reporting(0);
	require_once("connection.php");
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
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
			<?php include("navbar-after-login.php"); ?>
			<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
				<h2 align="center">Your Order</h2><hr>
				<h5 align="center">Please confirm that you wish to order the following items:</h5>
				<form action="success.php" method="GET">
					<table class="table table-striped">
						<thead>
							<tr>
							<th>Item Number</th>
							<th>Cost</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							if (!empty($_GET['items']))
								{
								$ordered = $_GET['items'];
								$totalprice = 0;
								$price = 0;
								$message = "items ID : ";
								if (empty($ordered))
									header('location: home.php');
								else							
									{
										for ($i=0; $i<count($ordered); $i++)
											{
											$id = $ordered[$i];
											$message = $message.$id." ";
											$query = "SELECT Price, PID FROM items WHERE PID='$id'";
											$result = mysqli_query($con, $query);
											$row = mysqli_fetch_array($result);
											$price = ($row['Price']);
											$totalprice += $price;

											echo "<tr>";
											echo "<td>#$id</td>";
											echo "<td>Rs $price</td>";
											echo "<tr>";
											}
										echo "<tr>";
										echo "<td>Total</td>";
										echo "<td>Rs $totalprice</td>";
									}
								}
							else
								header('location: home.php');
							?>
						</tbody>
					</table>
					<input type="hidden" name="itemsid" value="<?php echo $message; ?>">
					<center><a href="success.php" class="btn btn-primary" >Confirm</a></center>
				</form>
			</div>
		</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>