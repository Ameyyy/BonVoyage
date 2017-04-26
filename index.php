

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
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/nav.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="js/scroll.js"></script>

</head>

<body>


		<div class="header">
		<h1>Bon voyage</h1>
		</div>

				
				
				<nav class="shadow">
				
					<ul>
						<li onclick="smoothScroll(document.getElementById('home'))" >Home</li>
						<li onclick="smoothScroll(document.getElementById('destinations'))" >Destinations</li>
						<li  onclick="smoothScroll(document.getElementById('suggest'))" >Suggest a Vacation</li>
						<li  onclick="smoothScroll(document.getElementById('about'))" >About Us</li>
						<li class="null"></li>
						<?php
						error_reporting(0);
						include("php/connect.php");
						
						require("php/session.php");
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
						    <div class="w3-modal-content w3-card-5 w3-animate-zoom reg" style="max-width:600px; top:-80px">

						      <div class="w3-center"><br>
						        <h2>Register</h2>
						        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						      </div>

						      <form class="w3-container" action="php/register.php" method="POST">
						        <div align="left" class="w3-section">
						          <div class="section group" >
						          <div class="col span_4_of_8" style="text-align:left">
						          <label><b>Name</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name" required>
						           </div>
						          <div class="col span_4_of_8" style="text-align:left">
						          <label><b>Email</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="email" required>
						          </div></div>
						          <div class="section group" >
						          <div class="col span_4_of_8" style="text-align:left">
						          <label><b>Password</b></label>
						          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pwd" required>
						          </div>
						          <div class="col span_4_of_8" style="text-align:left">
						          <label><b>Confirm Password</b></label>
						          <input class="w3-input w3-border" type="password" placeholder="Enter Password again" name="cpwd" required>
						           </div></div>
						           <div class="section group">
						          <div class="col span_4_of_8" style="text-align:left">
						          <label><b>Age</b></label>
						          <input class="w3-input w3-border" type="number" placeholder="Enter Age" name="age" style="text-align:left"required>
						          </div>
						          <div class="col span_4_of_8" style="text-align:left">
						          <label><b>Gender</b></label><br>
						          <input type="radio" name="gender" value="Male" checked> Male<br>
  								  <input type="radio" name="gender" value="Female"> Female<br>
  								  </div>
  								  </div>
								  <label><b>Contact No.</b></label><br>
								  <input class="w3-input w3-border" type="tel" name="cno" maxlength="10" placeholder="Enter your Phone Number" required>
						          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Register</button>
						        </div>
						      </form>

						      <div  align="left" class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
						        <span class="w3-right w3-padding w3-hide-small">Already Registered? <a onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block'">Log In</a></span>
						      </div>  
						  </div>
						</div>
					</div>
											
					<?php
				}
				else{
				?>
						<li onclick="location.href='php/myprofile.php'" ><?php echo $_SESSION["Name"] ?></li>
						<li onclick="location.href='php/logout.php'">Log Out</li>
					</ul>
				</nav>
					<?php
					}
					$conn->close();;
					?>


				<div class="section group" id="home">
					<div class="col span_2_of_8">
					</div>
					<div class="col span_4_of_8">
                                            <form name="search" method="post" action="php/search.php">
                                                <div class="col span_6_of_8">
                                                <input type="text" class="search shadow" style="border-radius:5px" name="dest" placeholder="Search for a Vacation" style="width:">
                                                </div>
                                                <div class="col span_2_of_8">
                                                <button  type="submit" value="search" class="btn btn-info btn-lg shadow">
      						<span class="glyphicon glyphicon-search"></span> Go
                                                </button>
                                                </div>
                                        </form>
					</div>
					<div class="col span_2_of_8">	
					</div>
				</div>
				
				<div class="section group" id="slide">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8 ">
						
						  <div id="myCarousel" class="carousel slide shadow" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						      <li data-target="#myCarousel" data-slide-to="2"></li>
						      <li data-target="#myCarousel" data-slide-to="3"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">

						      <div class="item active">
						        <img src="images/carousel/5.jpg" alt="Chania" width="460" height="345">
						        <div class="carousel-caption">
						          <h1>Take Vacations</h1>
						          <p>Go as many places as you can</p>
						          <h4>You can always make money</h4>
						          <h4>You can't always make memories</h4>
						        </div>
						      </div>

						      <div class="item">
						        <img src="images/carousel/dubainew.jpg" alt="Chania" width="460" height="345">
						        <div class="carousel-caption">
						          <h1>Dubai</h1>
						          <p>Have a look at our cheapest and newly added Destination.</p>
						        </div>
						      </div>
						    
						      <div class="item">
						        <img src="images/carousel/family.jpg" alt="Flower" width="460" height="345">
						        <div class="carousel-caption">
						          <h1 style="color:black">FAMILY15</h1>
						          <p style="color:black">Use this coupon while Booking a Family Package and get 15% off.</p>
						        </div>
						      </div>

						      <div class="item">
						        <img src="images/carousel/3.jpg" alt="Flower" width="460" height="345">
						        <div class="carousel-caption">
						         <p>10% off on all Packages for couples.</p>
						         <p>Use the following coupon while booking:</p>
						         <h1>COUPLE10</h1>

						        </div>
						      </div>
						  
						    </div>

						    <!-- Left and right controls -->
						    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						      <span class="sr-only">Previous</span>
						    </a>
						    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						      <span class="sr-only">Next</span>
						    </a>
						  </div>

					</div>
					<div class="col span_1_of_8">	
					</div>
				</div>
				
				<div class="section group">
					<div class="col span_2_of_8">
					</div>
					<div class="col span_4_of_8 ">
					<div class="w3-panel w3-sand w3-leftbar quote shadow">
					    <p><i class="fa fa-quote-right w3-xxlarge w3-opacity"></i><br>
					    <i class="w3-serif w3-xlarge">The World is a book, and those who do not Travel read only a page.</i></p>
					  </div>
					</div>
					<div class="col span_2_of_8">
					</div>
				</div>	

				<div class="section group" id="destinations">
					<div class="col span_8_of_8">
					<h1 style="font-size:300%">Explore Countries & Cities</h1>
					</div>
				</div>



				<div class="section group dest">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_2_of_8">
						  <div class="w3-dropdown-hover"><a href="dest/Switzerland.php">
						  <img class="shadow" src="images/switzerland.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <br><br><br><h1 style="font-size:350%">Switzerland</h1><br>
						   	</div>
						  </a></div>
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover"><a href="dest/France.php">
						  <img class="shadow" src="images/france.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <br><br><br><h1 style="font-size:350%">France</h1><br>
						    </div>
						  </a></div>
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover"><a href="dest/Brazil.php">
						  <img class="shadow" src="images/england.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <br><br><br><h1 style="font-size:350%">Brazil</h1><br>
						    </div>
						  </a></div>
					</div>
					<div class="col span_1_of_8">
					</div>
				</div>
				
					<div class="section group">
					<div class="col span_1_of_8">	
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover"><a href="dest/Australia.php">
						  <img class="shadow" src="images/australia.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <br><br><br><h1 style="font-size:350%">Australia</h1><br>
						    </div>
						  </a></div>
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover"><a href="dest/Dubai.php">
						  <img class="shadow" src="images/uae.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <br><br><br><h1 style="font-size:350%">Dubai</h1><br>
						    </div>
						  </a></div>
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover"><a href="dest/Singapore.php">
						  <img class="shadow" src="images/singapore.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <h1 style="font-size:350%">Malaysia</h1>
						        <h1 style="font-size:350%">Singapore</h1>
						        <h1 style="font-size:350%">Thailand</h1>
						    </div>
						  </a></div>
					</div>
					<div class="col span_1_of_8">
					</div>
				</div>


				<div class="section group" id="">
					<div class="col span_8_of_8">
					<h1 style="font-size:200%">Our Destinations Across the Globe</h1>
					</div>
				</div>

				<div class="section group">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_6_of_8">
					<div id="map" class="shadow"></div>
					 <script>
					      function initMap() {
					        var swz = {lat: 46.8182, lng: 8.2275};
							var uae = {lat: 23.4241, lng: 53.8478};
							var fr = {lat: 46.2276, lng: 2.2137};
							var uk = {lat: 55.3781, lng: -3.4360};
							var aus = {lat: -25.2744, lng: 133.7751};
							var sg = {lat: 1.3521 , lng: 103.8198};
							 
					        var map = new google.maps.Map(document.getElementById('map'), {
					          zoom: 3,
					          center: uae
					        }); 
							
					        var marker1 = new google.maps.Marker({
					          position: uae,
							  animation: google.maps.Animation.BOUNCE,
					          map: map
					        });
							
							var marker2 = new google.maps.Marker({
					          position: swz,
							  animation: google.maps.Animation.BOUNCE,
					          map: map
					        });
							
							var marker3 = new google.maps.Marker({
					          position: fr,
							  animation: google.maps.Animation.BOUNCE,
					          map: map
					        });
							
							var marker4 = new google.maps.Marker({
					          position: sg,
							  animation: google.maps.Animation.BOUNCE,
					          map: map
					        });
							
							var marker5 = new google.maps.Marker({
					          position: aus,
							  animation: google.maps.Animation.BOUNCE,
					          map: map
					        });
							
							var marker6 = new google.maps.Marker({
					          position: uk,
							  animation: google.maps.Animation.BOUNCE,
					          map: map
					        });
					      }
					    </script>
					    <script async defer
					    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeL6SYCMlP06Z-5FrJuyYCeJ20-EqYCTY&callback=initMap">
					    </script>
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
