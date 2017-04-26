<?php
	session_start();
	require("connect.php");
	require("session.php");
	
$dest = $_POST["dest"];
$pack = $_POST["pack"];
$people = $_POST["people"];
$sdate = $_POST["sdate"];
$coupon = $_POST["coupon"];
$pm = $_POST["pm"];
if ($pack=='Family'){
$amt = mysqli_query($conn,"Select Family from Cost where D_ID=(Select D_ID from Destination where Name='$dest')");
while($row = mysqli_fetch_array($amt)){
		 echo $row['Family'];
		 $amount=$row['Family'];
}}
$disc= mysqli_query($conn,"Select Discount from Coupon where Name='$coupon'");
while($row = mysqli_fetch_array($disc)){
		 echo $row['Discount'];
		 $discount=$row['Discount'];
}
$tamount=$amount*$people*$discount;
$email=$_SESSION['login_user'];



$sql = "INSERT INTO Booking (Destination, Pack, People, SDate, Email, TAmount, Coupon, PM)
        VALUES ('$dest', '$pack', '$people', '$sdate', '$email', '$tamount', '$coupon', '$pm')";

	if ($conn->query($sql) === TRUE) {
		 $_SESSION['amount']=$amount;
		 $_SESSION['discount']=$discount;
		 $_SESSION['dest']=$dest;
		 header("location: confirmbooking.php");
} else {
    echo "Sorry! Cannot Book." . $sql . "<br>" . $conn->error;
}


?>
