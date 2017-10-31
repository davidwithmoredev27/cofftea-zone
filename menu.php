<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<title>Our Menu</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
</head>
<body>
	<div id="container">
		<header class="header">
			<section id="logocontainer">
				<img src="img/cofftealogo.png" alt="cofftea zone">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="coffteamenu.php">Cofftea Menu</a></li>
					<li><a href="lagomenu.php">Lago Menu</a></li>
					<li><a href="foodservices.php">Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<section id="menubannercontainer">
			<div id="caption">
				<h1>Our menu</h1>
			</div>		
		</section>
		<section id="menucontainer">
			<div class="menucategory">
				<div class="category"><a href="">food</a></div>
				<div class="category"><a href="">speciality beverage</a></div>
				<div class="category"><a href="">pastries</a></div>
			</div>
			<div class="menudevider" id="lagomenus">
				<div id="lagomenutitle" class="menutitle">
					<h2>Lago De Dalahican Menu</h2>
				</div>
				<div class="menudivider lagomenudevider">
					<div class="categorytitle">
						<h3>Lorem.</h3>
					</div>
					<div class="dishes first-child">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
			<div class="menudevider" id="coffteamenus">
				<div id="coffteamenutitle" class="menutitle">
					<h2>Cofftea Zone Menu</h2>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h3></h3>
					</div>
					<div class="dishes first-child">
						<figure> 
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
					<div class="dishes">
						<figure>
							<img src="" alt="">
							<figcaption>
								<h4></h4>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h3></h3>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h3></h3>
					</div>
				</div>
			</div>
		</section>
		<footer id="footercontainer">
			<div class="footercontent">
				<div class="aboutinfocontainer">
					<p id="companyname"><span >Cofftea Zone</span></p>
					<p id="location"><span>851 Manila Cavite Road, Dalahican Cavite City,<br>Philippines.</span></p>
					<div id="phonenumber">
						<p>Contact Numbers:</p>
						<span>Telephone: 402-0556</span><br>
						<span>Mobile: 09177049806</span>
					</div>
					<div id="email">
						<p>email: <span>justine.ponsones@gmail.com</span></p>
					</div>
				</div>
				<div class="footernavbar">
					<nav class="links">
						<ul>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="menu.php">Menus</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="events.php">Events</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
					</nav>
					<div class="findus">
						<h3>Find Us</h3>
						<a href="#">Facebook</a>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
			</div>
		</footer>
	</div>
	<script src="../js/jquery-3.2.1.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
</body>
</html>