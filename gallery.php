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
		<!-- <section id="menubannercontainer" class="gallerybanner">
			<div id="caption">
				<h1>Gallery</h1>
			</div>		
		</section> -->
		<section id="gallerycontainer">
			<div class="gallerydevider">
				<div class="gallerytitle">
					<h3>Product images</h3>
				</div>
				<div class="imgcollecandlarimgcontainer">
					<div class="imgcollection">
						<div id="productcollection">
							<div class="collectiondevider">
								<figure class="producthighlight"><img  class="imageproduct" src="img/menus/Burgers and Sandwiches/chicken sandwhich.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/Burgers and Sandwiches/cheese burger.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/pizza/all meat lovers.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/main course/tocilog.jpg" alt=""></figure>
							</div>
							<div class="collectiondevider">
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/main course/noksilog.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/Hot Drinks/cafe latte.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/Hot Drinks/cappuccino.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/menus/Hot Drinks/Cafe_Mocha.jpg" alt=""></figure>
							</div>
							<div class="collectiondevider">
								<figure class="producthighlight"><img class="imageproduct" src="img/dishes/cofftea/dessert/20171022_154948.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/dishes/cofftea/dessert/20171022_155055.jpg" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/dishes/cofftea/dessert/_MG_3736.JPG" alt=""></figure>
								<figure class="producthighlight"><img class="imageproduct" src="img/dishes/cofftea/dessert/_MG_3739.JPG" alt=""></figure>
							</div>
						</div>
					</div>
					<div class="largeimg">
						<div class="imgzoom">
							<div id="imgzoomproduct">
								<img src="" alt="" id="productsZoom">
							</div>
						</div>
						<div class="zoomarrow">
							<div class="arrow" id="leftarrowproduct"><--</div>
							<div class="arrow" id="rightarrowproduct">--></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="gallerydevider">
				<div class="gallerytitle">
					<h3>Customer Experience</h3>
				</div>
				<div class="imgcollecandlarimgcontainer">
					<div class="imgcollection">
						<div id="customercollection">
							<div class="collectiondevider">
								<figure><img src="img/gallery/customerexp/imagesone.jpg" alt=""></figure>
								<figure><img src="img/gallery/customerexp/imagestwo.jpg" alt=""></figure>
								<figure><img src="img/gallery/customerexp/imagethree.jpg" alt=""></figure>
								<figure><img src="img/gallery/customerexp/imagefour.jpg" alt=""></figure>
							</div>
							<div class="collectiondevider">
								<figure><img src="img/gallery/customerexp/imagefive.jpg" alt=""></figure>
								<figure><img src="img/gallery/customerexp/imagesix.JPG" alt=""></figure>
								<figure><img src="img/gallery/customerexp/imageseven.jpg" alt=""></figure>
								<figure><img src="img/gallery/customerexp/imageeigth.JPG" alt=""></figure>
							</div>
							<div class="collectiondevider">
								<figure><img src="" alt=""></figure>
								<figure><img src="" alt=""></figure>
								<figure><img src="" alt=""></figure>
								<figure><img src="" alt=""></figure>
							</div>
						</div>
					</div>
					<div class="largeimg">
						<div class="imgzoom">
							<div id="imgzoomcustomer">
								<img src="" alt="">
							</div>
						</div>
						<div class="zoomarrow">
							<div class="arrow" id="leftarrowcustomer"><--</div>
							<div class="arrow" id="rightarrowcutomer">--></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footercontainer">
			<div id="footerinfoscontent">
				<div class="footerdinfodevider">
					<div class="footericon">
						<img src="img/cofftealogo.png" width="100%" height="100%" alt="">
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
						<img src="img/buttons/contactus.png" width="100%" height="60%" alt="">
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
					<div class="followicons">
						<a href="#" class="followiconslink">
							<img  width="35px" height="35px" src="img/buttons/FACEBOOKLOGO.png" alt=""></a>
						<a href="#" class="followiconslink"><img width="35px" height="35px" src="img/buttons/google.png" alt=""></a>
					</div>
					<div class="footertitle">
						<h3>Follow Us:</h3>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone 2017</p>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="js/galleryanimation.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
</body>
</html>