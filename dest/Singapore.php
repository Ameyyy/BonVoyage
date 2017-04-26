<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title>Malaysia-Singapore-Thailand</title>
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
  	
  	
  	</style>

</head>

<body>


		<div class="header" style="text-align:center">
		<h1>Bon Voyage</h1>
		</div>

			
			
				<nav class="shadow">
					<ul>
						<li onclick="javascript:location.href='../index.php'">Home</li>
						<li onclick="smoothScroll(document.getElementById('loc'))" >Locations</li>
						<li onclick="smoothScroll(document.getElementById('book'))" >Book This Vacation</li>
						<li onclick="smoothScroll(document.getElementById('about'))" >About Us</li>
						<li class="null"></li>

						<?php
						error_reporting(0);
						include("../php/connect.php");
						require("../php/session.php");
						if ($_SESSION["loggedin"]!= true) {
							?>
							<li onclick="document.getElementById('id01').style.display='block'" >Login
						</li>
						<li onclick="document.getElementById('id02').style.display='block'" >Register
						</li>
					</ul>
				</nav>
				
<div id="id01" class="w3-modal">
						    <div class="w3-modal-content w3-card-5 w3-animate-zoom" style="max-width:600px">

						      <div class="w3-center"><br>
						        <h2>Log In</h2>
						        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						      </div>

						      <form class="w3-container" action="../php/login.php" method="POST">
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

						      <form class="w3-container" action="../php/register.php" method="POST">
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
						

						<li onclick="location.href='../php/myprofile.php'" ><?php echo $_SESSION["Name"] ?></li>
						<li onclick="location.href='../php/logout.php'" >Log Out</li>
					</ul>
				</nav>
		
					<?php
					}
					?>
											

				<div class="section group" id="home">
					<div class="col span_2_of_8">
					</div>
					<div class="col span_4_of_8">
                                            <form name="search" method="post" action="../php/search.php">
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
					<div class="col span_4_of_8">
						<video width="100%" controls>
						  <source src="../videos/singapore.mp4" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
					</div>
					<div class="col span_2_of_8" text-align="left">
					<div class="w3-card-6"  style="width:100%">
					<h3>Malaysia</h3>
					<p>
					A beautiful country with a rich cultural heritage that blends Asian and European influence, <b>Malaysia</b> offers many attractions.
					</p>
					<h3>Singapore</h3>
					<p>
					<b>Singapore</b> is known as a bustling metropolis that also happens to be one of the cleanest and safest cities of its size in the world. You'll find historic sites like the Thian Hock Keng temple, superlative shopping and numerous beaches.
					</p>
					<h3>Thailand</h3>
					<p>
					<b>Thailand</b> is the most popular tourist destination in Southeast Asia, and for a reason. You can find almost anything here: crystal blue beaches, thick jungle, great food, cheap beach front bungalows and some of the best luxury hotels in the world.
					<p/>
					</div>
					</div>
					<div class="col span_1_of_8">	
					</div>
				</div>
				

				<div class="section group dest" id="loc">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_3_of_8">
						  <div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Singapore/Perhentian_islands.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>
						        Sea lovers planning to visit Malaysia should put the <b>Perhentian Islands</b> on the top of their list of places to see. This is a small archipelago with two main islands; Besar, the bigger, and Kecil, the smaller. Both boast splendid beaches, white sand, an amazingly blue, shallow sea and the shadows of tall palm trees. Apart from tourists, the islands are mostly uninhabited, making them a perfect place to disconnect and take a break from modern life.
								</p>
						    </div>
						  </div>
					</div>
					<div class="col span_3_of_8">
						<div class="col span_8_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Singapore/Twin_towers.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>
						        In a country with a rich and beautiful natural landscape, Kuala Lumpur’s <b>Petronas Twin Towers</b> stand out as an unusual example of Malaysia’s urban design excellence. Designed by American architecture star César Pelli and officially inaugurated in 1999, the towers were the tallest buildings in the world until 2004.
								</p>
						    </div>
						  </div>
						  </div>
						
						<div class="col span_8_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Singapore/Ayuthaya_historical_park.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>
						       	<b>Ayutthaya Historical Park</b>, this popular tourist attraction contains the ruins of the second capital of Siam, which was founded around 1350. By 1700 Ayutthaya had become one of the largest cities in the world with a total of 1 million inhabitants.
						        </p>
						    </div>
						  </div>
						 </div>
					
					</div>
					<div class="col span_1_of_8">
					</div>
				</div>
				
					<div class="section group">
					<div class="col span_1_of_8">	
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Singapore/Merlion_park.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>
						        <b>Merlion Park</b> is located near Marina Bay, Singapore. This park is home to an 8.6 meter-tall and 40 ton-weight, water-spouting Merlion. The Singapore’s tourism icon is a mythical creature with the head of a lion and the body of a fish.
								</p>
						    </div>
						  </div>
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Singapore/Ko_nang_yuan.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>
						        <b>Ko Nang Yuan</b> is a tiny island very close to Ko Tao. It’s a pretty island and its clear waters are perfect for snorkeling and scuba diving. The island does have one dive resort for travelers who prefer to stay on this small island.
						        </p>
						    </div>
						  </div>
					</div>
					<div class="col span_2_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Singapore/skypark_singapore.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						  	<div class="info">
						        <p>
						        The magnificent <b>Marina Bay Sands</b> is an integrated resort fronting Marina Bay that offers a luxury 2,561-room hotel, an art convention and exhibition center, the Shoppes Mall, an Art & Science museum, two Sands Theatres, seven “celebrity chef” restaurants, two floating pavilions, a nightclub, lounges and a casino with 500 tables and 1,600 slot machines.
						        </p>  
						        
						    </div>
						    </div>
						  </div>
					</div>
				
				<div class="section group comment">
					<div class="col span_1_of_8"></div>
					<div class="col span_6_of_8">
					<h1>Packages</h1>
					<table width='100%' border='3' style="font-size:120%">
						<th style="text-align:center">Packages</th>
						<th style="text-align:center">Family</th>
						<th style="text-align:center">Group</th>
						<th style="text-align:center">Student</th>
						<th style="text-align:center">Couple</th>
					<?php
					$cost = mysqli_query($conn,"Select * from cost where D_ID='MST'");
					while($row = mysqli_fetch_array($cost)){
					?>
					<tr>
						<th style="text-align:center">Price per Person</th>
						<td><?php echo $row['Family']?></td>
						<td><?php echo $row['Group1']?></td>
						<td><?php echo $row['Student']?></td>
						<td><?php echo $row['Couple']?></td>
					</tr>
					<?php 
					}
					?>
					</table>
					</div>
					<div class="col span_1_of_8"></div>
				</div>


				<div class="section group comment">
					<div class="col span_1_of_8"></div>
					<div class="col span_6_of_8" style="text-align:left">
					<button class="accordion" style="font-size:140%">Reviews</button>
					<div class="panel">
					<?php
						error_reporting(0);
						include("../php/connect.php");
						require("../php/session.php");
						if ($_SESSION["loggedin"]= true) {
							?>
					    <div class="comment_input">
					        <form name="form1">
					   
					        	<input type="hidden" name="DID" value="MST">
					            <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
					            <a href="#" onClick="commentSubmit()" class="button">Post</a></br>
					        </form>
					    </div>
					    <?php
					    }
					    ?>
					    <script>
					    	
	function commentSubmit(){
		if( form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var did = form1.DID.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==2000){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('POST', '../php/insertc.php?did='+did+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			var did='MST';
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('../php/clogs.php?did='+did);}, 2000);
		});




					    </script>
					    <div id="comment_logs">
					    	Loading comments...
					    <div>
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
					<div class="col span_1_of_8"></div>
				</div>

				<div class="section group book" id="book">
					<div class="col span_8_of_8">
					<div class="bot">
						 <button onclick="document.getElementById('id03').style.display='block'" class="bottom" style"vertical-align:middle">
						 <span>Book This Vacation</span>
						 </button>
						 </div>

						  <div id="id03" class="w3-modal">
						    <div class="w3-modal-content w3-card-5 w3-animate-zoom book" style="max-width:600px">

						      <div class="w3-center"><br>
						        <h2>Booking</h2>
						        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
						      </div>

						      <form class="w3-container" action="../php/booking.php" method="POST">
						        <div align="left" class="w3-section">
						          <label><b>Destination</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Select a Destination" name="dest" value="Malaysia-Singapore-Thailand" readonly>    
									<label><b>Package</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" placeholder="Select a Package" name="pack" list="package" required>    
									<datalist id="package">
									<option value="Family">Family</option>
								    <option value="Group">Group</option>
								    <option value="Student">Student</option>
								    <option value="Couple">Couple</option>
								    </datalist>
								    <label><b>Number of People</b></label>
						          <input class="w3-input w3-border" type="num" placeholder="Enter Number of People" name="people" required>
						          <label><b>Start Date</b></label>
						          <input class="w3-input w3-border" type="date" name="sdate" required>
						          <label><b>Apply Coupon</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Coupon Code" name="coupon">
						          <label><b>Payment Method</b></label>
						          <input class="w3-input w3-border w3-margin-bottom" placeholder="Select a mode for Payment" name="pm" list="pay" required>    
									<datalist id="pay">
									<option value="Credit Card">Credit Card</option>
								    <option value="Debit Card">Debit Card</option>
								    <option value="Net Banking">Net Banking</option>
								    </datalist>
						          
						          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Book</button>
						        </div>
						      </form>

						      <div  align="left" class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
						      </div>

						      
						    
						  </div>
						</div>
					</div>
					</div>
				</div>

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