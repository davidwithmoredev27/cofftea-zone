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
			var roomOne = document.getElementById("roomone");
			var roomTwo = document.getElementById("roomtwo");
			var roomThree = document.getElementById("roomthree");
			var martinasDetails = document.getElementById("details");
			var martinas = document.getElementById("martinas");
			 var ktvrooms = document.getElementById("ktvrooms");
			console.log(button);
			console.log(close);
			var styleSheet = {
				displayBlock : "block",
				displayNone : "none",
			};
			// for close button
			var showOverlay = function() {
				martinas.style.display = styleSheet.displayNone;
				ktvrooms.style.display = styleSheet.displayBlock;
				if (this === button[0]) {
					servicesoverlay.style.display = styleSheet.displayBlock;

					roomOne.style.display = styleSheet.displayBlock;
					roomTwo.style.display = styleSheet.displayNone;
					roomThree.style.display = styleSheet.displayNone;
					console.log("Helllo world");
				} else if (this === button[1]) {
					servicesoverlay.style.display  = styleSheet.displayBlock;
					roomOne.style.display = styleSheet.displayNone;
					roomTwo.style.display = styleSheet.displayBlock;
					roomThree.style.display = styleSheet.displayNone;

					console.log("Hello");
				} else if (this === button[2]) {
					servicesoverlay.style.display  = styleSheet.displayBlock;
					roomOne.style.display = styleSheet.displayNone;
					roomTwo.style.display = styleSheet.displayNone;
					roomThree.style.display = styleSheet.displayBlock;
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
			close.addEventListener("click" , function(){
				servicesoverlay.style.display = styleSheet.displayNone;
			}, false);

			martinasDetails.addEventListener("click" , function	() {
				servicesoverlay.style.display = styleSheet.displayBlock;
				martinas.style.display = styleSheet.displayBlock;
				ktvrooms.style.display = styleSheet.displayNone;

			} , false);
			// 

		};
	</script>
	<style type="text/css">
		.slider img {
			display: block;
		}
		#servicesoverlay {
			position: fixed;
			z-index: 1;
			background-color: rgba(0 , 0 , 0 , 0.7);
		
			display: none;
			width: 100%;
			height: 100%;
		}
		#overlayclose {
			width: 100%;
			height: 50px;
			
		}
		#overlayclose img {
			display: block;
			width: 50px;
			float: right;
			margin-right: 100px;
		}
		#ktvrooms {
			width: 70%;
			margin: 0 auto;
			height: 500px;
			margin-top: 30px;
			border: 1px solid white;
		}
		.rooms {
			width: 100%;
			height: 100%;
			padding: 10px;
		}
		.rooms .roomimages {
			width: 50%;
			display: inline-block;
			height: 100%;
			border: 1px solid black;
		}
		.roomimages figure {
			width: 100%;
			height: 100%;
			margin: 0;

		}
		.roomimages figure img {
			width: 100%;
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.rooms .roomdesc {
			width: 49%;
			height: 100%;
			float: right;
			background-color: white;
			padding: 10px;
			padding-left: 30px;
			line-height: 200%;
		}
		 .roomdesctitle {
			width: 100%;
			height: 30px;
			margin-bottom: 10px;
		}
		.roomdesctitle h3 {
			width: 100%;
			height: 100%;
			text-align: center;
		}
		.reservation > li:first-child {
			list-style-type:none;
			font-weight: bold;
		}
		#close {
			cursor: pointer;
		}
		#martinas {
			width: 95%;
			height: 500px;
			margin:0 auto;
			display: none;
			padding: 10px;
			border: 1px solid white;
		}
		.martinasinfo {
			background-color: #fff;
			margin-left: 10px;
			line-height: 190%;
		}
		.martinasinfo p {
			font-weight: bold;
			margin-left: 10px;
		}
		#martinasimg , .martinasinfo {
			float: left;
			width: 32.5%;
			height: 100%;
			border: 1px solid white;
		}
		.martinasinfolist {
			padding-left: 30px;
		}

		.martinastitle {
			width: 100%;
			margin-bottom: 10px;
		}
		.martinastitle > h3 {
			text-align: center;
		}
		#martinasimg figure {
			width: 100%;
			height: 100%;
			margin:0;
		}
		#martinasimg figure img {
			background-position: center;
			background-repeat: no-repeat;
		}
		.reservationstyle {
			list-style-type: none;
			font-weight: bold;
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
								<li>Minimum of Five (5) Person.</li>
								<li>&#x20B1; 150 per head (For the First Hour).</li>
								<li>&#x20B1; 100 per head (For the next and succeding hour).</li>
								<li>Consumable of Food and drinks.</li>
							</ul>
						</nav>
						<nav>
							<ul class="reservation">
								<li>Reservation</li>
								<li>No down Payment</li>
								<li>When The Customer don't come within the 30 minutes of the scheduled time of Resevation, the slot will be given to other customer.</li>
							</ul>
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
								<li>Minimum of Five (5) Person.</li>
								<li>&#x20B1; 150 per head (For the First Hour).</li>
								<li>&#x20B1; 100 per head (For the next and succeding hour).</li>
								<li>Consumable of Food and drinks.</li>
							</ul>
						</nav>
						<nav>
							<ul class="reservation">
								<li>Reservation</li>
								<li>No down Payment.</li>
								<li>When The Customer don't come within the 30 minutes of the scheduled time of Resevation, the slot will be given to other customer.</li>
							</ul>
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
								<li>Minimum of Five (5) Person.</li>
								<li>&#x20B1; 150 per head (For the First Hour).</li>
								<li>&#x20B1; 100 per head (For the next and succeding hour).</li>
								<li>Consumable of Food and drinks.</li>
							</ul>
						</nav>
						<nav>
							<ul class="reservation">
								<li>Reservation</li>
								<li>No down Payment</li>
								<li>When The Customer don't come within the 30 minutes of the scheduled time of Resevation, the slot will be given to other customer.</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>	
		</div>
		<div id="martinas">
			<div id="martinasimg">
				<figure>
					<img src="img/martinas.JPG"  width="100%" height="100%" alt="">
				</figure>
			</div>
			<div class="martinasinfo">
				<div class="martinastitle">
					<h3>Terms and Conditions</h3>
				</div>
				<p>Packages for Ten Thousand (&#x20B1; 10.000).</p>
				<div class="martinasinfolist">
					<nav>		
						<ul class="martinaslist">
							<li>Sound system with DJ.</li>
							<li>Tables and Chairs.</li>
							<li>Extension Room.</li>
							<li>Air Condition.</li>
							<li>Available Room.</li>
							<li>Projector.</li>
							<li>Preparation time is 1 hour.</li>
							<li>Operating party time is 6 hours. Additional five hundred (&#x20B1; 500) for the next and succeding hours.</li>
							<li class="reservationstyle">Reservation</li>
							<li>Minimum deposit at least One Thousand (&#x20B1; 1.000)</li>
							<li>No Confirmation of arrival can cancel the reservation.</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="martinasinfo">
				<div class="martinastitle">
					<h3>Terms and Conditions</h3>
				</div>
				<p>Packages for Seven Thousand (&#x20B1; 7.000).</p>
				<div class="martinasinfolist">
					<nav>
						<ul class="martinaslist">
							<li>Sound system with DJ.</li>
							<li>Tables and Chairs.</li>
							<li>Extension Room.</li>
							<li>Air Condition.</li>
							<li>Available Room.</li>
							<li>Preparation time is 1 hour.</li>
							<li>Operating party time is 6 hours. Additional five hundred (&#x20B1; 500) for the next and succeding hours.</li>
							<li class="reservationstyle">Reservation</li>
							<li>Minimum deposit at least One Thousand (&#x20B1; 1.000)</li>
							<li>No Confirmation of arrival can cancel the reservation.</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div id="container" class="backgroundMain">
		<header class="header">
			<section id="logocontainer">
				<img src="img/cofftealogo.png" alt="cofftea">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="coffteamenu.php">Our Menu</a>
						<div id="megadropdownmenu">
							<nav class="categorymenus">
								<div class="categorydropdowntitle">
									<h3>Drinks</h3>
								</div>
								<ul>
									<li><a href="">Signature Drinks</a></li>
									<li><a href="">Italian Soda</a></li>
									<li><a href="">Fruit Tea</a></li>
									<li><a href="">Hot Drinks</a></li>
									<li><a href="">Iced Coffee</a></li>
									<li><a href="">Frappucino</a></li>
									<li><a href="">Yakult Drinks</a></li>
									<li><a href="">Milk Tea</a></li>
									<li><a href="">Smoothies</a></li>
									<li><a href="">CockTails</a></li>
								</ul>
							</nav>
							<nav class="categorymenus">
								<div class="categorydropdowntitle">
									<h3>Food</h3>
								</div>
								<ul>
									<li><a href="menu/starter.php">Starter</a></li>
									<li><a href="">Burger and Sandwiches</a></li>
									<li><a href="">Pizza</a></li>
									<li><a href="">Soup</a></li>
									<li><a href="">Main Course</a></li>
									<li><a href="">Group Meals</a></li>
									<li><a href="">Platter</a></li>
									<li><a href="">Pasta</a></li>
								</ul>
							</nav>
							<nav class="categorymenus">
								<div class="categorydropdowntitle">
									<h3>Pastries</h3>
								</div>
								<ul>
									<li><a href="">Dessert</a></li>
								</ul>
							</nav>
						</div>
					</li>
					<li><a href="services.php">Services</a></li>
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
						<div id="details">Details</div>
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