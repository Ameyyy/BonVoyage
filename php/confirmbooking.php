<?php
error_reporting(0);
include("connect.php");
session_start();
require("session.php");
$email= $_SESSION['login_user'];
?>



<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title>Confirm Booking</title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/sliderstyle.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

		<div class"header" style="text-align:center">
		<h1>Confirm Booking</h1>
		</div>

				
				<div class="section group">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8">
					<div class="w3-card-4"  style="width:100%">
					<h1>Details<h1>
					<div class="section group">
					<?php
					$sql1 = mysqli_query($conn,"Select * from booking where Email='$email'");
					while($row = mysqli_fetch_array($sql1)){?>
					
					<div class="col span_4_of_8">
					<h3>Destination Details</h3>
					
					<h4>Name: <?php echo $row['Destination']?></h4>
					<h4>Package: <?php echo $row['Pack']?></h4>
					<h4>Start Date: <?php echo $row['SDATE']?></h4>
					</div><div class="col span_4_of_8">
					<h3>Booking Details</h3>
					<h4>Email: <?php echo $row['Email']?></h4>
					<h4>Coupon: <?php echo $row['Coupon']?></h4>	
					</div>
					</div>
					<table width='100%' border='3' style="font-size:70%">
					<tr>
						<th style="text-align:center">Amount Per Person</th>
						<td style="text-align:center"><?php echo  $_SESSION['amount']?></td>
					</tr>
					<tr>
						<th style="text-align:center">Total Number of People</th>
						<td style="text-align:center"> x <?php echo $row['People']?></td>
					</tr>
					<tr>	
						<th style="text-align:center">Coupon Discount</th>
						<td style="text-align:center"> - <?php echo  ((1-$_SESSION['discount'])*$_SESSION['amount']*$row['People']) ?></td>
					</tr>
					<tr>
						<th style="text-align:center">Total Amount</th>
						<td style="text-align:center"><?php echo $row['TAmount']?></td>
					</tr>
					<tr>
						<th style="text-align:center">Payment Method</th>
						<td style="text-align:center"><?php echo $row['PM']?></td>
					</tr>
					<?php
					}?> 
					</table>
					</div>
					</div>
					<div class="col span_1_of_8">	
					</div>
				</div>
				
				<div class="section group">
					<div class="col span_8_of_8">
					 <button onclick="location.href='print.php'" class="w3-button w3-green w3-large">Confirm & Pay</button>
					</div>
				</div>	


</body>
</html>
