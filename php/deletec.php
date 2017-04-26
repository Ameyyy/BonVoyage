<?php
require("connect.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM comments WHERE id='$id'");
header("location:javascript://history.go(-1)");
}
mysqli_close($conn);
?>