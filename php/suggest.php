

<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title>Bon Voyage</title>
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
  	<script src="js/scroll.js"></script>

</head>

<body>


		<div class="header">
		<h1>Bon voyage</h1>
		</div>

				
				
				<nav>
					<div class="menu-icon">
						<i class=""></i>
					</div>
					<ul>
						<li><a onclick="smoothScroll(document.getElementById('home'))" >Home</a></li>
						<li onclick="smoothScroll(document.getElementById('destinations'))" >Destinations</li>
						<li  onclick="smoothScroll(document.getElementById('suggest'))" >Suggest a Vacation</li>
						<li  onclick="smoothScroll(document.getElementById('about'))" >About Us</li>
						<li class="null"></li>
						<?php
						error_reporting(0);
						include("connect.php");
						
						require("session.php");
						if ($_SESSION["loggedin"] != true) {
							?>

						<li onclick="document.getElementById('id01').style.display='block'" >Login</li>
						<li onclick="document.getElementById('id02').style.display='block'" >Register</li>
					</ul>
				</nav>
				
						  <div id="id01" class="w3-modal">
						    <div class="w3-modal-content w3-card-5 w3-animate-zoom" style="max-width:600px">

						      <div class="w3-center"><br>
						        <h2>Log In</h2>
						        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						      </div>

						      <form class="w3-container" action="php/login.php" method="POST">
						        <div align="left" class="w3-section">
						          <label><b>Email</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="email" required>
						          <label><b>Password</b></label>
						          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pwd" required>
						          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
						        </div>
						      </form>

						      <div  align="left" class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
						      </div>

						    </div>
						  </div>
						</div>

						
						  <div id="id02" class="w3-modal">
						    <div class="w3-modal-content w3-card-5 w3-animate-zoom reg" style="max-width:600px">

						      <div class="w3-center"><br>
						        <h2>Register</h2>
						        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						      </div>

						      <form class="w3-container" action="php/register.php" method="POST">
						        <div align="left" class="w3-section">
						          <label><b>Name</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name" required>
						          <label><b>Email</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="email" required>
						          <label><b>Password</b></label>
						          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pwd" required><br>
						          <label><b>Confirm Password</b></label>
						          <input class="w3-input w3-border" type="password" placeholder="Enter Password again" name="cpwd" required><br>
						          <label><b>Age</b></label>
						          <input class="w3-input w3-border" type="number" placeholder="Enter Age" name="age" required><br>
						          <label><b>Gender</b></label><br>
						          <input type="radio" name="gender" value="Male" checked> Male<br>
  								  <input type="radio" name="gender" value="Female"> Female<br><br>
								  <label><b>Contact No.</b></label><br>
								  <input class="w3-input w3-border" type="tel" name="cno" maxlength="10" placeholder="Enter your Phone Number" required>
						          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Register</button>
						        </div>
						      </form>

						      <div  align="left" class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
						        <span class="w3-right w3-padding w3-hide-small">Already Registered? <a href="#">Log In</a></span>
						      </div>  
						  </div>
						</div>
					</div>
											
					<?php
				}
				else{
				?>
						<li onclick="location.href='php/myprofile.php'" class="navbutton"><?php echo $_SESSION["Name"] ?></li>
						<li onclick="location.href='php/logout.php'" class="navbutton">Log Out</li>
					</ul>
				</nav>
					<?php
					}
					$conn->close();;
					?>





				
				<div class="section group" id="slide">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8">
						<h2>Suggestions</h2><br>

<?php

	include("connect.php");
	
$region = $_POST["region"];
$type = $_POST["type"];
$pack = $_POST["pack"];
$geography = $_POST["geography"];


$sql = mysqli_query($conn,"Select Link, Name from destination 
		where Type like '%$type%' 
		and Package like '%$pack%' 
		and Geography like '%$geography%' 
		and Region='$region'");

		echo "<h2>Region: ". $region . "</h2>";
		echo "<h2>Type: ". $type . "</h2>";
		echo "<h2>Package: ". $pack . "</h2>";
		echo "<h2>Geography: ". $geography . "</h2><br>";

	if (!$sql)
	{
    echo "<h3>Sorry! No suitable suggestions found for the above categories.</h3>";
	}
	else
	{
	
		 while($row = mysqli_fetch_array($sql))
				{
					echo "<h2><a href=../". $row['Link'] . ">" . $row['Name'] . "</a></h2>";
				}
	} 

mysqli_close($conn);

?>

</div>
					<div class="col span_1_of_8">	
					</div>
				</div>

<div class="section group footer">
					<div class="col span_8_of_8">
					
					</div>
				</div>