<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Gallery</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
</head>
<body>
	<div id="container">
		<header class="header">
			<section id="logocontainer">
				<img src="img/cofftealogo.png" alt="cofftea">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="coffteamenu.php">Our Menu</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<!-- <section id="menubannercontainer" class="gallerybanner">
			<div id="caption">
				<h1>Gallery</h1>
			</div>		
		</section> -->
		<section id="gallerycontainer">
			<div class="gallerydevider">
				<div class="gallerycatalog" id="galleryparty">
					<div class="captiongallery"><p>Parties</p></div>
					<div class="moreimg"><a href="gallerypages/">See more</a></div>
				</div>
			</div>
			<div class="gallerydevider">
				<div class="gallerycatalog" id="galleryproducts">
					<div class="captiongallery"><p>Products</p></div>
					<div class="moreimg"><a href="">See more</a></div>
				</div>
				<div class="gallerycatalog" id="Customer Exp.">
					<div class="captiongallery"><p>Customer experience</p></div>
					<div class="moreimg"><a href="">See more</a></div>
				</div>
			</div>
		</section>
		<footer id="footercontainer">
			<div class="footercontent">
				<div class="aboutinfocontainer">
					<p id="companyname"><span>Lago Cafe</span></p>
					<p id="location"><span>851 Manila Cavite Road, Dalahican Cavite City,<br>Philippines.</span></p>
					<div id="phonenumber">
						<p>Contact Numbers:</p>
						<span>Lago: 09054521702</span><br>
						<span>Cofftea: 09177049806</span>
					</div>
					<div id="email">
						<p>email: <span>LagoCafe2017@gmail.com</span></p>
					</div>
				</div>
				<div class="footernavbar">
					<nav class="links">
						<ul>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="coffteamenu.php">Cofftea Menu</a></li>
							<li><a href="lagomenu.php">Lago Menu</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="facilities.php">Facilities</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
					</nav>
					<div class="findus">
						<h3>Find Us</h3>
						<a href="#">Facebook</a>
					</div>
				</div>
				<div class="hours">
					<div class="hoursdevider">
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>COFFTEA HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>12:00 Noon to 11:00 PM</p>
							</div>
						</div>
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>LAGO HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>2:00 PM to 2:00 AM</p>
							</div>
						</div>
					</div>
					<div class="hoursdevider">
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>MARTINAS HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>12:00 Noon to 11:00 PM</p>
							</div>
						</div>
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>KTV BAR HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>2:00 PM to 2:00 AM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
			</div>
		</footer>
	</div>
	<script src="js/jquery-3.2.1.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
</body>
</html>