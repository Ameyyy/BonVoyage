<?php

	require("connect.php");
	require("session.php");
$dest = $_POST["dest"];

$sql = "Select Link from destination where Name='$dest'";
$result = $conn->query($sql);
	if ($result->num_rows ==1){ 
		
		 header("location: ../dest/$dest.php");
} else {
    echo "Sorry!Not Found<br>" . $conn->error;
}


?>
