<?php
error_reporting(0);
include("connect.php");
session_start();
require("session.php");
$email= $_SESSION['login_user'];
$dest= $_SESSION['dest'];
?>



<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title>Print</title>
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
  	<script src="../js/print.js"></script>
  	<style>
  	body {
  		
	}
  	</style>
</head>

<body>
	<div id="printableArea" >			
				<div class="section group" >
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8" >
					<div class="w3-card-4"  style="width:100%">
					<p style="font-size:400%">Bon Voyage<p>
					<h3>Your Vacation Pass!</h3>
					<div class="section group">
					<div class="col span_4_of_8">
					<?php 
					$sql2 = mysqli_query($conn,"Select * from destination where Name='$dest'");
					while($row = mysqli_fetch_array($sql2)){?>
					<h3>Destination Details</h3>
					<h4>Name: <?php echo $row['Name']?></h4>
					<h4>Region: <?php echo $row['Region']?></h4>
					<h4>Type: <?php echo $row['Type']?></h4>
					<h4>Geography: <?php echo $row['Geography']?></h4>
					<?php
					}

					$sql1 = mysqli_query($conn,"Select * from booking where Email='$email'");
					while($row = mysqli_fetch_array($sql1)){?>
					
					<h4>Package: <?php echo $row['Pack']?></h4>
					</div><div class="col span_4_of_8">
					<h3>Booking Details</h3>
					<h4>Booking ID: <?php echo $row['B_ID']?></h4>
					<h4>Number of People: <?php echo $row['People']?></h4>
					<h4>From: <?php echo $row['SDATE']?></h4>
					<h4>To: <?php 
					$date=date_create($row['SDATE']);
					date_add($date,date_interval_create_from_date_string("7 days"));
					echo date_format($date,"Y-m-d");?></h4>

					<?php
					}?> 
					</div>
					</div>
					<?php
					$sql3 = mysqli_query($conn,"Select * from user where Email='$email'");
					while($row = mysqli_fetch_array($sql3)){?>
					<h3>Personal Details</h3>
					<h4>Name: <?php echo $row['Name']?></h4>
					<h4>Email: <?php echo $row['Email']?></h4>
					<h4>Contact No: <?php echo $row['Contact']?></h4>
					<h4>Gender: <?php echo $row['Gender'] ?></h4>	
					<h4>Age: <?php echo $row['Age'] ?></h4>	
					<?php
					}?> 
					</div>
					</div>
					<div class="col span_1_of_8">	
					</div>
					</div>

					<br><br><br><br>

					<div class="section group">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8">
					<div class="w3-card-4"  style="width:100%">
					<h1>Invoice</h1><br>
					<?php
					$sql1 = mysqli_query($conn,"Select * from booking where Email='$email'");
					while($row = mysqli_fetch_array($sql1)){?>
					<table width='100%' border='3' style="font-size:150%">
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
					<tr>
						<th style="text-align:center">Transaction Completed on</th>
						<td style="text-align:center"><?php echo $row['TimeStamp']?></td>
					</tr>
					<?php
					}?> 
					</table>
					</div>
					</div>
					<div class="col span_1_of_8">	
					</div>
				</div>
			</div>	

				<div class="section group">
					<div class="col span_8_of_8">
					 <button onclick="printDiv('printableArea')" class="w3-button w3-green w3-large">Print</button>
					</div>
				</div>	


</body>
</html>
