<?php
error_reporting(0);
include("connect.php");
session_start();
require("session.php");
$email= $_SESSION['login_user'];
if (session_status() == PHP_SESSION_ACTIVE) {
$sql = mysqli_query($conn,"Select Name from user where Email='$email'");
	while($row = mysqli_fetch_array($sql)){
		 echo $row['Name'];
		 $_SESSION["Name"]=$row['Name'];
}}

?>



<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title>My Profile</title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/sliderstyle.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/comments.css">
	<link rel="stylesheet" href="../css/accordion.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="../js/accordion.js"></script>
  	<script src="../js/scroll.js"></script>
  	<style>
  	body{
  		background-image: url("");
  	}
  	
  	</style>

</head>

<body>


		<div class="header" style="text-align:center">
		<h1>Bon Voyage</h1>
		</div>


				<nav class="shadow">
					<ul>
						<li onclick="location.href='../index.php'">Home</li>
						<li onclick="smoothScroll(document.getElementById('reviews'))">My Reviews</li>
						<li onclick="smoothScroll(document.getElementById('suggest'))">Suggest a Vacation</li>
						<li onclick="smoothScroll(document.getElementById('about'))" >About Us</li>
						<li class="null"></li>
						<li onclick="location.href='myprofile.php'"><?php echo $_SESSION["Name"] ?></li>
						<li onclick="location.href='logout.php'" >Log Out</li>
					</ul>
				</nav>
	
						 
				<div class="section group">
					<div class="col span_2_of_8">
					</div>
					<div class="col span_4_of_8">
                                            <form name="search" method="post" action="search.php">
                                                <div class="col span_6_of_8">
                                                <input type="text" class="search" name="dest" placeholder="Search for a Vacation" style="width:">
                                                </div>
                                                <div class="col span_2_of_8">
                                                <button  type="submit" value="search" class="btn btn-info btn-lg">
      						<span class="glyphicon glyphicon-search"></span> Go
                                                </button>
                                                </div>
                                        </form>
					</div>
					<div class="col span_2_of_8">	
					</div>
				</div>
				
				<div class="section group">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8">
						
							<h1><?php echo $_SESSION["Name"] ?><h1>
							<div class="section group">
								<?php
								$sql1 = mysqli_query($conn,"Select Age, Gender, Email, Contact from user where Email='$email'");
								while($row = mysqli_fetch_array($sql1)){
								?>
									<div class="col span_4_of_8">
										<h3>Personal Details</h3>
										<h4>Age: <?php echo $row['Age']?></h4>
										<h4>Gender: <?php echo $row['Gender']?></h4>	
									</div>
									<div class="col span_4_of_8">
										<h3>Contact Details</h3>
										<h4>Email: <?php echo $row['Email']?></h4>
										<h4>Contact No: <?php echo $row['Contact'];}?></h4>	
									</div>
							</div>
							<div id="reviews">
								<button class="accordion" style="font-size:80%"> My Reviews</button>
					<div class="panel">
								<div style="text-align:left">
							
							 	<script>
					    	
		$(document).ready(function(e) {
			var did='FR';
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('myreviews.php');}, 2000);
		});
								</script>
					    			<div id="comment_logs">
					    				Loading comments...
					    			</div>
					    			<script>

						var acc = document.getElementsByClassName("accordion");
						var i;

						for (i = 0; i < acc.length; i++) {
						  acc[i].onclick = function() {
						    this.classList.toggle("active");
						    var panel = this.nextElementSibling;
						    if (panel.style.maxHeight){
						      panel.style.maxHeight = null;
						    } else {
						      panel.style.maxHeight = panel.scrollHeight + "px";
						    } 
						  }
						}
					</script>
				
					    		</div>
							
						</div>
						<div class="col span_1_of_8">	
						</div>
						</div>
					</div>
				</div>

				
							<div class="section group suggest shadow" id="suggest">
								<div class="col span_8_of_8">
								<h1>Suggest a Vacation for Me</h1>
								<div class="section group">
					<div class="col span_1_of_8"></div>
					<div class="col span_6_of_8" style="text-align:left; font-size:125%">
					
					<p>Have trouble deciding where to go on vacation? Don’t know your options? Trying to plan with friends or a family trip or a honeymoon? If you answered YES to any of these questions, then this is what you need.</p>
					<p>We created <b>"Suggest a Vacation"</b> to answer the age-old question, “Where should I go on vacation?” With around various global destinations, we deliver a customized list of destinations; allowing you to effectively and objectively explore destinations based your own vacation preferences.</p>
					</div>
					<div class="col span_1_of_8"></div>
					</div>

					<div class="section group suggest">
					<div class="col span_1_of_8"></div>
					<div class="col span_4_of_8" style="text-align:left ; font-size:125%">
					<p>It’s simple, just follow three easy steps:</p>
					<ol>
					<li>Click on the Suggest button</li>
					<li>Tell us what you want in your vacation by selecting your preferences from the available ones</li>
					<li>Click the Find Matches button</li>
					</ol>
					</div>
					<div class="col span_2_of_8">
					<div class="bot">
						 <button onclick="document.getElementById('id03').style.display='block'" class="bottom" style"vertical-align:middle">
						 <span>Suggest </span>
						 </button></div>

						  <div id="id03" class="w3-modal">
						    <div class="w3-modal-content w3-card-5 w3-animate-zoom" style="max-width:600px">

						      <div class="w3-center"><br>
						        <h2>Suggest a Vacation</h2>
						        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						      </div>

						      <form class="w3-container" action="php/suggest.php" method="POST">
						        <div align="left" class="w3-section">
						          <label><b>Region</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" placeholder="Select a Region" name="region" list="region">    
									<datalist id="region">
									<option value="Africa">Africa</option>
								    <option value="Asia-Pacific">Asia-Pacific</option>
								    <option value="Australia">Australia</option>
								    <option value="Europe">Europe</option>
								    <option value="North America">North America</option>
								    <option value="South America">South America</option>
								  </datalist>
						          <label><b>Type</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" placeholder="Select a Type" name="type" list="type">    
									<datalist id="type">
									<option value="Urban">Urban</option>
								    <option value="Nature">Nature</option>
								    <option value="Historic">Historic</option>
								    <option value="Entertainment">Entertainment</option>
								    </datalist>
						          <label><b>Package</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" placeholder="Select a Package" name="pack" list="pack">    
									<datalist id="pack">
									<option value="Family">Family</option>
								    <option value="Group">Group</option>
								    <option value="Student">Student</option>
								    <option value="Couple">Couple</option>
								    </datalist>
						          <label><b>Geography</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" placeholder="Select a Geography" name="geography" list="geography">    
									<datalist id="geography">
									<option value="Tropical">Tropical</option>
								    <option value="Desert">Desert</option>
								    <option value="Mountanious">Mountanious</option>
								    <option value="Snow">Snow</option>
								    </datalist>
						          
						          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Suggest</button>
						        </div>
						      </form>

						      <div  align="left" class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
						      </div>
   
						  </div>
						</div>
						</div>
						<div class="col span_1_of_8"></div></div>
					</div>
					</div>
				</div><br>
				
				<div class="section group about shadow" id="about">
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_3_of_8">
					<h1>Official Tourism Websites</h1><br>
					<div class="col span_4_of_8">
					<a href="http://www.australia.com/en-in">Australia</a><br><br>
					<a href="http://www.visitbrasil.com/en/">Brazil</a><br><br>
					<a href="https://www.visitdubai.com/en-in/">Dubai</a><br><br>
					<a href="http://in.france.fr/">France</a>
					</div>
					<div class="col span_3_of_8">
					<a href="http://www.tourism.gov.my/">Malaysia</a><br><br>
					<a href="http://www.visitsingapore.com/en.html">Singapore</a><br><br>
					<a href="http://www.myswitzerland.com/en-in/home.html">Switzerland</a><br><br>
					<a href="https://www.tourismthailand.org/home">Thailand</a>
					</div>
					</div>
					<div class="col span_3_of_8">
					<h1>About Us</h1><br>
					<p>Website developed and managed as a part of AIT MiniProject by</p>
					<div class="section group">
					<div class="col span_4_of_8">
					<p>Ameya Parab</p>
					<p>Siddhesh Mirjankar</p>
					</div>
					<div class="col span_4_of_8">
					<p>Nihar Karle</p>
					<p>Raghav Jhawar</p>
					</div>
					</div>
					<p>Email your queries at: ameya.parab@ves.ac.in or nihar.karle@ves.ac.in</p>
					<p>Contact us: +91-9930889285/+91-8898004099</p>
					</div>
					<div class="col span_1_of_8">
					
					</div>
				</div>
			

</body>
</html>
