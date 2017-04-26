<?php
require_once("connect.php");
session_start();

$email = $_POST["email"];
$password = $_POST["pwd"];
 
$sql = "SELECT * FROM user where Email='$email' and Password='$password'";

$result = $conn->query($sql);

if ($result->num_rows ==1){ 
         $_SESSION['login_user'] = $email;
          $_SESSION["loggedin"] = true;
         header("location: myprofile.php");
	}
 else {
    echo "Login Failed";
}
$conn->close();
?>

