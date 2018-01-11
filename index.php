<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Cofftea Zone</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
	<style type="text/css">
		#loadimages {
			-moz-transition: all linear 2s;
			-webkit-transition: all linear 2s;
			-ms-transition: all linear 2s;
			-o-transition: all linear 2s;
			transition:all linear 2s;
		}
	</style>
	<script type="text/javascript">
		// load this image before it can clicked
		window.onload = function () {
			var loadImages = document.getElementById("loadimages");
			var images = [
				"url('4th banner.jpg')",
				"url('_MG_3565.JPG')",
				"url('5th banner.jpg ')",
				"url('martinas venue.JPG')",
				"url('ktv venue.JPG')",
			];
			// load the image in cache before it will clicked
			for (var ii = 0 ; ii < images.length ;ii++) {
				loadImages.style.backgroundImage = images[ii];
			}
		}
	</script>
</head>
<body>

	<div id="loadimages" style="display:none">
	</div>
	<div id="overlay" style="display: none;">
			<div id="overlaybuttoncontainer">
				<div id="overlaybutton">
					<img src="img/buttons/ex.png" alt="">
				</div>
			</div>
			
			<div class="overlayimg">
				<img src="" width="100%" height="100%" id="imgoverlay">
			</div>

			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descone">
				<h4><strong>Midnight Cheesy Burger</strong></h4>
				<p>120.00 Php</p>
	
			</div>
			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="desctwo">
				<h4>Buttered Lemon Tanigue</h4>
				<p><strong>200.00 Php</strong></p>

			</div>
			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descthree">
				<h4><strong>Three Chesse Pizza</strong></h4>
				<p>150.00 Php</p>
			</div>

			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descfour">
				<h4><strong>Hot Chocolate</strong></h4>
				<p>100.00 Php</p>
			</div>
			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descfive">
				<h4><strong>Italian Soda Green Apple</strong></h4>
				<p>60.00/50.00 Php (16 oz/22 oz)</p>
			</div>
			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descsix">
				<h4><strong>Mexicano Sisig</strong></h4>
				<p>150.00 Php</p>
			</div>


			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descthree">
				<h4><strong>Boneless Bangus</strong></h4>
				<p>88.00 Php</p>

			</div>

			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descfour">
				<h4><strong>Crispy Pata</strong></h4>
				<p>320.00 Php</p>

			</div>
			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descfive">
				<h4><strong>Sisig Pizza</strong></h4>
				<p>300.00 Php</p>
				<p>Espresso with hot water.Guest can request their favorite blend or roast.</p>
			</div>
			<div class="description" style="padding-top: 20px; margin-top: 30px;" id="descsix">
				<h4><strong>Cafe Mocha</strong></h4>
				<p>80.00 Php</p>
				
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
		</header> <!-- end of header-->
		<section id="bannerimg">
			<!-- <div id="intro">
				<h2>No need to go far away to the metro!</h2>
				<h3>The coziest place in town to have your favorite coffee is finally here!</h3>
			</div> -->
			<div class="buttons">
				<div class="button"></div>
				<div class="button"></div>
				<div class="button"></div>
				<div class="button"></div>
				<div class="button"></div>
			</div>
		</section> <!-- end of bannerimg-->


		<!-- <section id="optionbuttoncontainer">
			<div class="optionbutton"><a href="lagomenu.php">Lago Menu</a></div>
			<div class="optionbutton"><a href="aboutus.php">Our Story</a></div>
			<div class="optionbutton"><a href="coffteamenu.php">Cofftea Zone</a></div>
		</section> -->



		<!-- <section class="missionandvission">
			<div id="vission" class="missionandvisioncontainer">
				<div class="misssionvissiontitle">
					<h3>Our Vision</h3>
				</div>
				<div class="content">Cofftea Zone sees itself as one of the leading and unique cafe restaurants by 2020</div>
			</div>
			<div id="mission" class="missionandvisioncontainer">
				<div class="misssionvissiontitle">
					<h3>Our Mission</h3>
				</div>
				<div class="content">Cofftea Zone will make the best effort to create a unique place where can socialize with each other in a comportable and relaxing environment while enjoying the best brewed coffee or espresso and pastries in town. We will be in the the bussiness of helping our customers to relieve stress by providing piece of mind through great ambience, convinient location, friendly customer services, and products of consistently high quality. Cofftea increase the employee satisfaction while providing stable return to the company and its employee.</div>
			</div>
			
		</section> -->
		<section id="maincontainer">
			<div id="featuredandnewproductcontainer">
				<div class="newproduct">
					<div class="newandfeattitle">
						<h3>Our New Product</h3>
					</div>
					<div class="newprodandfeatureimg">
						<figure>
							<img src="our new product.jpg" alt="">
						</figure>
					</div>

				</div>
				<div id="scrolldownfeatured">
					<div class="featuredproduct">
						<div class="newandfeattitle">
							<h3>Our Promos</h3>
						</div>
						<div class="newprodandfeatureimg">
							<figure>
								<img src="1st banner.jpg" alt="">
							</figure>
						</div>			
					</div>
					<div class="featuredproduct" style="">
						<div class="newprodandfeatureimg">
							<figure>
								<img src="2nd banner.jpg" alt="">
							</figure>
						</div>			
					</div>
				</div>
			</div>
			<section id="bestsellercontainer">
				<!-- <div class="bestsellerdevider">
					<div class="bestsellertitle" id="lagosellertitle">
						<h3>Lago Best Seller</h3>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/bestseller/lago/fried-chicken.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/bestseller/lago/mexicano sisig.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/bestseller/lago/spare ribs.jpeg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/bestseller/lago/tempura.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure >
							<img src="img/bestseller/lago/crispy pata.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure >
							<img src="img/bestseller/lago/buffalo wing.jpg" alt="">
						</figure>
					</div>
				</div> -->
				<div class="bestsellerdevider">
					<div class="bestsellertitle" id="coffteasellertitle">
						<h3>Our Best Seller</h3>
					</div>
					<div class="seller firtseller sellerclick">
						<figure>
							<img src="img/menus/Burgers and Sandwiches/midnight cheesy burger.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick" >
						<figure>
							<img src="img/menus/main course/butter lemon tanigue.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/menus/pizza/tree cheese.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/menus/Hot Drinks/hot chocolate.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure >
							<img src="img/bestseller/cofftea/green apple soda.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure >
							<img src="img/menus/platter/mexicano sisig.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/bestseller/cofftea/bonless bangus.JPG" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure>
							<img src="img/bestseller/cofftea/crispy pata.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure >
							<img src="img/bestseller/cofftea/sisig pizza.jpg" alt="">
						</figure>
					</div>
					<div class="seller sellerclick">
						<figure >
							<img src="img/menus/Hot Drinks/Cafe_Mocha.jpg" alt="">
						</figure>
					</div>
				</div>
			</section>
		</section>
		

		<footer id="footercontainer">
			<div id="footerinfoscontent">
				<div class="footerdinfodevider">
					<div class="footericon">
						<img src="img/social-facebook-circular-button.svg" width="100%" height="100%" alt="">
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
	<!-- <script src="js/jquery-3.2.1.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
	<script type="text/javascript" src="js/homepageanimation.js"></script>
</body>
</html>