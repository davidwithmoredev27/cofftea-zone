<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Our Menu</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
	<style>
		.descriptiontxt {
			display: none;
		}
	</style>
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
		<section id="menucontainer">
			<!-- <div class="menudevider" id="coffteamenus">
				<div class="dishtitle">
					<h3><a name="food">Food</a></h3>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Starter</h4>
					</div>
					<div class="dishes first-child dishone">
						<div class="dishtitleanddesc">
							<h5>Hash Brown (2 PCS)</h5>
							<p>50.00 PHP</p>
						</div>
					</div>
					<div class="dishes dishtwo">
						<div class="dishtitleanddesc">
							<h5>Chicharap</h5>
							<p>50.00 PHP</p>
						</div>
					</div>
					<div class="dishes dishthree">
						<div class="dishtitleanddesc">
							<h5>Achara</h5>
							<p>50.00 PHP</p>
						</div>
					</div>
					<div class="dishes dishfour">
						<div class="dishtitleanddesc">
							<h5>Kimchi</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
					<div class="dishes dishfive">
						<div class="dishtitleanddesc">
							<h5>Fries</h5>
							<p>60.00 PHP</p>
						</div>
					</div>

					<div class="dishes first-child" id="dishsix">
						<div class="dishtitleanddesc">
							<h5>Lumpiang Shanghai</h5>
							<p>100.00 PHP</p>
						</div>

					</div>
					<div class="dishes dishseven">
						<div class="dishtitleanddesc">
							<h5>Nachos</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
					<div class="dishes disheigth">
						<div class="dishtitleanddesc">
							<h5>Cheesy Bacon fries</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
					<div class="dishes dishnine">
						<div class="dishtitleanddesc">
							<h5>Buffalo Wings</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
					<div class="dishes dishten">
						<div class="dishtitleanddesc">
							<h5>Fish &amp; Fries</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Burgers &amp; Sandwiches</h4>
					</div>
					<div class="dishes first-child dish11">
						<div class="dishtitleanddesc">
							<h5>Chicken Sandwich</h5>
							<p>70.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish12">
						<div class="dishtitleanddesc">
							<h5>Ham &amp; Egg Sandwich</h5>
							<p>70.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish13">
						<div class="dishtitleanddesc">
							<h5>Cheese Burger</h5>
							<p>100.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish14">
						<div class="dishtitleanddesc">
							<h5>Bacon Wrapped cheese burger</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish15">
						<div class="dishtitleanddesc">
							<h5>Midnight Cheesy burger</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Pizza</h4>
					</div>
					<div class="dishes first-child dish16">
						<div class="dishtitleanddesc">
							<h5>Hawaian</h5>
							<p>250.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish17">
						<div class="dishtitleanddesc">
							<h5>Pepperoni</h5>
							<p>250.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish18">
						<div class="dishtitleanddesc">
							<h5>Margherita</h5>
							<p>250.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish19">
						<div class="dishtitleanddesc">
							<h5>Three Cheese</h5>
							<p>250.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish20">
						<div class="dishtitleanddesc">
							<h5>All Meat Lovers</h5>
							<p>280.00 PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Soup for (6-7 Persons)</h4>
					</div>
					<div class="dishes first-child dish21">
						<div class="dishtitleanddesc">
							<h5>Crab &amp; Corn</h5>
							<p>150.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish22">
						<div class="dishtitleanddesc">
							<h5>Nido Soup</h5>
							<p>150.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish23">
						<div class="dishtitleanddesc">
							<h5>Mushroom Soup</h5>
							<p>150.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish24">
						<div class="dishtitleanddesc">
							<h5>Lomi</h5>
							<p>150.00 PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Main Course with rice</h4>
					</div>
					<div class="dishes first-child dish25">
						<div class="dishtitleanddesc">
							<h5>Tapsilog</h5>
							<p>80.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish26">
						<div class="dishtitleanddesc">
							<h5>Tocilog</h5>
							<p>80.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish27">
						<div class="dishtitleanddesc">
							<h5>Noksilog</h5>
							<p>99.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish28">
						<div class="dishtitleanddesc">
							<h5>Buttered Garlic Chicken</h5>
							<p>120.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish29">
						<div class="dishtitleanddesc">
							<h5>Boneless Bangus</h5>
							<p>88.00 PHP</p>
						</div>
					</div>
				</div>
			</div> -->
			
			<!-- Drinks -->
	
			<!-- <div class="menudevider" id="coffteamenus">
				<div class="dishtitle">
					<h3><a name="beverage">Speciality Beverage</a></h3>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Hot Drinks</h4>
					</div>
					<div class="dishes first-child dish30">
						<div class="dishtitleanddesc">
							<h5>Brewed Coffee</h5>
							<p>55.00 PHP (12 oz)</p>
						</div>
					</div>
					<div class="dishes dish31">
						<div class="dishtitleanddesc">
							<h5>Cafe Americano</h5>
							<p>70.00 PHP (12 oz)</p>
						</div>
					</div>
					<div class="dishes dish32">
						<div class="dishtitleanddesc">
							<h5>Cafe Latte</h5>
							<p>80.00 PHP (12 oz)</p>
						</div>
					</div>
					<div class="dishes dish33">
						<div class="dishtitleanddesc">
							<h5>Caffucino</h5>
							<p>80.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish34">
						<div class="dishtitleanddesc">
							<h5>Cafe Mocha</h5>
							<p>90.00 PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Iced Coffee</h4>
					</div>
					<div class="dishes first-child dish35">
						<div class="dishtitleanddesc">
							<h5>Iced Americano</h5>
							<p>60:00(12 oz) 70:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish36">
						<div class="dishtitleanddesc">
							<h5>Iced Latte</h5>
							<p>70.00(12 oz) 80:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish37">
						<div class="dishtitleanddesc">
							<h5>Iced Mocha</h5>
							<p>80.00(12 oz) 90:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish38">
						<div class="dishtitleanddesc">
							<h5>Iced White Mocha</h5>
							<p>80.00(12 oz) 90:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish39">
						<div class="dishtitleanddesc">
							<h5>Iced Caramel</h5>
							<p>80.00(12 oz) 90:00(16 oz) PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Frapuccino</h4>
					</div>
					<div class="dishes first-child dish40">
						<div class="dishtitleanddesc">
							<h5>Mocha</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish41">
						<div class="dishtitleanddesc">
							<h5>White Mocha</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish42">
						<div class="dishtitleanddesc">
							<h5>Caramel</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish43">
						<div class="dishtitleanddesc">
							<h5>Tiramisu</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish44">
						<div class="dishtitleanddesc">
							<h5>French Mocha</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Signature Drinks</h4>
					</div>
					<div class="dishes first-child dish45">
						<div class="dishtitleanddesc">
							<h5>Cookies &amp; Cream</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish46">
						<div class="dishtitleanddesc">
							<h5>Java Chip</h5>
							<p>110.00(12 oz) 120:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish47">
						<div class="dishtitleanddesc">
							<h5>Madagazcar Vanilla</h5>
							<p>130.00(12 oz) 140:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish48">
						<div class="dishtitleanddesc">
							<h5>Matcha Green Tea</h5>
							<p>130.00(12 oz) 140:00(16 oz) PHP</p>
						</div>
					</div>
					<div class="dishes dish49">
						<div class="dishtitleanddesc">
							<h5>Dark Chocolate</h5>
							<p>130.00(12 oz) 140:00(16 oz) PHP</p>
						</div>
					</div>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Italian Soda</h4>
					</div>
					<div class="dishes first-child dish50">
						<div class="dishtitleanddesc">
							<h5>Strawberry</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish51">
						<div class="dishtitleanddesc">
							<h5>Green apple</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish52">
						<div class="dishtitleanddesc">
							<h5>Passion Fruit</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish53">
						<div class="dishtitleanddesc">
							<h5>Blue Raspberry</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish54">
						<div class="dishtitleanddesc">
							<h5>Mango</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
				</div>
			</div> -->


			<!-- Dessert-->

			<!--<div class="menudevider" id="coffteamenus">
				<div class="dishtitle">
					<h3><a name="pastries">Pastries</a></h3>
				</div>
				<div class="menudivider coffteamenudevider">
					<div class="categorytitle">
						<h4>Dessert</h4>
					</div>
					<div class="dishes first-child dish55">
						<div class="dishtitleanddesc">
							<h5>Muffin</h5>
							<p>60.00 PHP</p>
						</div>
					</div>
					<div class="dishes dish56">
						<div class="dishtitleanddesc">
							<h5>Blue Berry Cheese Cake</h5>
							<p>80.00 PHP per sliced</p>
						</div>
					</div>
					<div class="dishes dish57">
						<div class="dishtitleanddesc">
							<h5>Strawberry Cheese Cake</h5>
							<p>50.00 PHP per sliced</p>
						</div>
					</div>
					<div class="dishes dish58">
						<div class="dishtitleanddesc">
							<h5>Oreo Cheese Cake</h5>
							<p>60.00 PHP per sliced</p>
						</div>
					</div>
					<div class="dishes dish59">
						<div class="dishtitleanddesc">
							<h5>Nutella Cheese Cake</h5>
							<p>60.00 PHP per sliced</p>
						</div>
					</div>
					<div class="dishes first-child dish60">
						<div class="dishtitleanddesc">
							<h5>Dark Chocolate Cake</h5>
							<p>80.00 PHP per sliced</p>
						</div>
					</div>
					<div class="dishes dish61">
						<div class="dishtitleanddesc">
							<h5>Sansrival Cake</h5>
							<p>100.00 PHP per sliced</p>
						</div>
					</div>
				</div>
			</div>-->


			<div class="menudeviders">
				<div class="menutitle">
					<h3><span>Food</span></h3>	
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Starter</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Burger's &amp; Sandwiches</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Pizza</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Soup</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Main Course</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Platter</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Pasta</span></h4>
					</div>
				</div>
			</div>
			<div class="menudeviders">
				<div class="menutitle">
					<h3><span>Drinks</span></h3>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Hot Drinks</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Iced Coffee</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Frapuccino</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Signature Drinks</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Italian Soda</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Fruit Tea</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Yakult Drinks</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Milk Tea</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Smoothies</span></h4>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>CockTails</span></h4>
					</div>
				</div>
			</div>
			<div class="menudeviders">
				<div class="menutitle">
					<h3><span>Desserts</span></h3>
				</div>
				<div class="menucategory">
				
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
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".dishcat").slick({
				infinite: true ,
				slideToShow : 13,
				slidetoScroll :
			})
		});
	</script>
</body>
</html>