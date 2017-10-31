<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Services</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
	<script type="text/javascript">
		window.onload = function() {
			var servicesoverlay = document.getElementById("servicesoverlay");
			var button = document.getElementsByClassName("button");
			var close = document.getElementById("close");
			console.log(button);
			console.log(close);
			var styleSheet = {
				displayBlock : "block",
				displayNone : "none",
				closeOverlay : function () {
					servicesoverlay.style.display = this.displayNone;
				}
			};
			// for close button
			
			var showOverlay = function() {
				if (this === button[0]) {
					servicesoverlay.style.display = styleSheet.displayBlock;
					console.log("Helllo world");
				} else if (this === button[1]) {
					servicesoverlay.style.display  = styleSheet.displayBlock;
					console.log("Hello");
				} else if (this === button[2]) {
					servicesoverlay.style.display  = styleSheet.displayBlock;
					console.log("world");
				} 
			};
			for (var i = 0 ; i < button.length ; i++) {
				switch(i) {
					case 0:
						button[0].addEventListener('click' , showOverlay , false);
					continue;
					case 1:
						button[1].addEventListener('click' , showOverlay , false);
					continue;
					case 2:
						button[2].addEventListener('click' , showOverlay , false);
					continue;
				}
			}
		};
	</script>
	<style type="text/css">
		.slider img {
			display: block;
		}
		#servicesoverlay {
			position: fixed;
			background-color: #2a2a2a;
			opacity: 0.8;
			display: none;
			width: 100%;
			height: 100%;
		}
		#overlayclose {
			width: 100%;
			height: 50px;
			border: 1px solid black;
		}
		#overlayclose img {
			display: block;
			width: 50px;
			float: right;
			margin-right: 100px;
		}
		#ktvrooms {
			width: 500px;
			margin: auto;
			margin-top: 30px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div id="servicesoverlay">
		<div id="overlayclose"><img src="img/buttons/ex.png" alt="" id="close"></div>
		<div id="ktvrooms">
			<div id="roomone" class="rooms">
				<div class="roomimages">
					<figure><img src="img/ktv/room 1.JPG" alt=""></figure>
				</div>
				<div class="roomdesc">
					<div class="roomdesctitle">
						<h3>Terms and Condition</h3>
					</div>
					<div class="termsandreserve">
						<nav>
							<ul>
								<li>Minimum of Five (5) Person</li>
								<li>&#x20B1; 150 per head (For the First Hour)</li>
								<li>&#x20B1; 100 per head (For the next and succeding hour)</li>
								<li>Consumable of Food and drinks</li>
							</ul>
						</nav>
						<nav>
							<ul>
								<li>Reservation</li>
								<li>No down Payment</li>
							</ul>
							<div class="reservationDetails">
								<p>When The Customer don't come within the 30 minutes of the scheduled time of Resevation, the slot will be given to other customer</p>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div id="roomtwo" class="rooms">
				<div class="roomimages">
					<figure><img src="img/ktv/room 2.JPG" alt=""></figure>
				</div>
				<div class="roomdesc">
					<div class="roomdesctitle">
						<h3>Terms and Condition</h3>
					</div>
					<div class="termsandreserve">
						<nav>
							<ul>
								<li>Minimum of Five (5) Person</li>
								<li>&#x20B1; 150 per head (For the First Hour)</li>
								<li>&#x20B1; 100 per head (For the next and succeding hour)</li>
								<li>Consumable of Food and drinks</li>
							</ul>
						</nav>
						<nav>
							<ul>
								<li>Reservation</li>
								<li>No down Payment</li>
							</ul>
							<div class="reservationDetails">
								<p>When The Customer don't come within the 30 minutes of the scheduled time of Resevation, the slot will be given to other customer</p>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<div id="roomthree" class="rooms">
				<div class="roomimages">
					<figure><img src="img/ktv/room3.JPG" alt=""></figure>
				</div>
				<div class="roomdesc">
					<div class="roomdesctitle">
						<h3>Terms and Condition</h3>
					</div>
					<div class="termsandreserve">
						<nav>
							<ul>
								<li>Minimum of Five (5) Person</li>
								<li>&#x20B1; 150 per head (For the First Hour)</li>
								<li>&#x20B1; 100 per head (For the next and succeding hour)</li>
								<li>Consumable of Food and drinks</li>
							</ul>
						</nav>
						<nav>
							<ul>
								<li>Reservation</li>
								<li>No down Payment</li>
							</ul>
							<div class="reservationDetails">
								<p>When The Customer don't come within the 30 minutes of the scheduled time of Resevation, the slot will be given to other customer</p>
							</div>
						</nav>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div id="container">
		<header class="header">
			<section id="logocontainer">
				<img src="img/cofftealogo.png" alt="cofftea">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="coffteamenu.php">Our Menu</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header>
		<!-- 	<div id="menubannercontainer" class="servicesbanner" style="padding-top: 0;">
		<div id="caption">
			<h1>Services</h1>
		</div>
				</div> -->
		<section class="servicescontainer">
			<div class="ktv">
				<div class="ktvcontainer">
					<div class="ktvtitle">
						<h4>KTV</h4>
					</div>
					<div class="rooms" id="firstroom">
						<div class="roomsfigure button">
							Details
						</div>
					</div>
					<div class="rooms" id="secondroom">
						<div class="roomsfigure button">
							Details
						</div>
					</div>
					<div class="rooms" id="thirdroom">
						<div class="roomsfigure button">
							Details
						</div>
					</div>
				</div>
			</div>
			<div class="martinas">
				<div class="martinascontainer" >
					<div class="martinastitle">
						<h3>MARTINAS</h3>
					</div>
					<div class="imageslider" id="sliderfunction">
						<div class="details"><a href="">Details</a></div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footercontainer">
			<div id="footerinfoscontent">
				<div class="footerdinfodevider">
					<div class="footericon">
						<img src="" alt="">
					</div>
					<div class="footertitle">
						<h3>Cofftea Zone</h3>
					</div>
					<div class="footeraddress">
						<p>851 Manila Cavite Road, Dalahican Cavite City Philippines</p>
					</div>
				</div>
				<div class="footerdinfodevider">
					<div class="footericon">
						<img src="" alt="">
					</div>
					<div class="footertitle">
						<h3>Contact Number</h3>
					</div>
					<div class="contact">
						<p><strong>Mobile:</strong> 09177049806</p>
						<p><strong>Telephone:</strong> 418-31-56</p>
					</div>
				</div>
				<div class="footerdinfodevider">
					<div class="footericon">
						<img src="" alt="">
					</div>
					<div class="footertitle">
						<h3>Follow Us:</h3>
					</div>
					<div class="followicons">
						<a href="#"><img src="" alt=""></a>
						<a href="#"><img src="" alt=""></a>
						<a href="#"><img src="" alt=""></a>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone 2017</p>
			</div>
		</footer>
	</div>
</body>
</html>