<?php

	require("connect.php");
	
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pwd"];
$cpassword = $_POST["cpwd"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$cno = $_POST["cno"];

if($password==$cpassword){
$sql = "INSERT INTO user

        (Name, Email, Password, Age, Gender, Contact)

        VALUES

        ('$name', '$email', '$password', '$age', '$gender', '$cno')";

	if ($conn->query($sql) === TRUE) {
		 header("location: ../index.html");
} else {
    echo "Already Registered" . $sql . "<br>" . $conn->error;
}
}
else{
	echo "Passwords do not match";
}

?>
