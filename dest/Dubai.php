<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title>Dubai</title>
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
  	
  	}
  	
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
						  <source src="../videos/dubai.mp4" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
					</div>
					<div class="col span_2_of_8" text-align="left">
					<div class="w3-card-6"  style="width:100%">
					<h2>Dubai</h2>
					<p><b>Dubai</b> is one of the seven emirates that make up the United Arab Emirates. It is rather like an independent city-state and is the most modern and progressive emirate in the UAE, developing at an unbelievable pace in the tourist and trade sectors especially. Dubai is a huge city with several district articles containing sightseeing, restaurant, nightlife and accommodation listings.
					</p>	
					</div>
					</div>
					<div class="col span_1_of_8">	
					</div>
				</div>
				

				<div class="section group dest" id="loc">
					<div class="col span_1_of_8">
					</div>
					<div class="col span_2_of_8">
						  <div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Dubai/Burj Khalifa.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>Soaring 828 metres above Dubai and currently the world's tallest building, the <b>Burj Khalifa</b> represents a union of art, engineering and heritage. It's home to thousands of metres of office space, 900 private residences, the 160-room Armani Hotel.
								</p>
						    </div>
						  </div>
					</div>
					<div class="col span_4_of_8">
						<div class="col span_4_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Dubai/Dubai Zoo.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p><b>Dubai Zoo</b> is the oldest zoo of its kind not only in the United Arab Emirates but also in the Arabian Peninsula. It is a special place of interest and fun for tourists. The Dubai Zoo became a landmark as it indicated the “town’s end“.

								</p>
						    </div>
						  </div>
						</div>

					<div class="col span_4_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Dubai/Palm Jumeirah.jpg" style="width:100%">
						  	<div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>The most audacious of all of Dubai's mega projects is the collection of reclaimed islands just offshore. In addition to the many hotels and resorts on the islands, you can sail around <b>Palm Jumeirah</b> in a yacht or speedboat offered by one of the many private touring companies.
						        </p>
						    </div>
						  </div>
					</div>
					</div>

					<div class="col span_4_of_8">
					<div class="col span_4_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Dubai/Gold Souk.jpg" style="width:100%">
						  <div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>Even if you're not in the market for precious metals, you should definitely walk through the <b>Gold Souk</b> - everything you'll see is authentic. The world's largest gold market sells jewellery and gemstones from Dubai, India and more, crafted in 22k and 18k gold.
								</p>
						    </div>
						  </div>
					</div>

					<div class="col span_4_of_8">
						<div class="w3-dropdown-hover">
						  <img class="shadow" src="../images/Dubai/Burj Al Arab.jpg" style="width:100%">
						  <div class="w3-dropdown-content w3-card-4" style="width:100%">
						        <p>The hotel's distinctive sail-shaped silhouette has made it an iconic symbol of modern Dubai. Often voted the world's most luxurious hotel, the <b>Burj Al Arab</b> is one of the region's most famous tourist landmarks.
								</p>
						    </div>
						  </div>
					</div>
					</div>
					</div>
					<div class="col span_1_of_8">
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
					$cost = mysqli_query($conn,"Select * from cost where D_ID='DXB'");
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
					   
					        	<input type="hidden" name="DID" value="DXB">
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
			var DID='DXB';
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('../php/clogs.php?did='+DID);}, 2000);
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
						          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Select a Destination" name="dest" value="Dubai" readonly>    
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