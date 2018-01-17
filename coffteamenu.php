<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Our Menu</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
	<style type="text/css">
		.descriptiontxt {
			display: none;
		}
		
		.slick-next {
			width:20px;
			height:20px;
		}
		.slick-prev {
			width:20px;
			height:20px;
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
									<li><a href="menu/signaturedrinks.php">Signature Drinks</a></li>
									<li><a href="menu/italiansoda.php">Italian Soda</a></li>
									<li><a href="menu/fruittea.php">Fruit Tea</a></li>
									<li><a href="menu/hotdrinks.php">Hot Drinks</a></li>
									<li><a href="menu/icedcoffee.php">Iced Coffee</a></li>
									<li><a href="menu/frapuccino.php">Frappucino</a></li>
									<li><a href="menu/yakultdrinks.php">Yakult Drinks</a></li>
									<li><a href="menu/milktea.php">Milk Tea</a></li>
									<li><a href="menu/smoothies.php">Smoothies</a></li>
									<li><a href="menu/cocktails.php">CockTails</a></li>
								</ul>
							</nav>
							<nav class="categorymenus">
								<div class="categorydropdowntitle">
									<h3>Food</h3>
								</div>
								<ul>
									<li><a href="menu/starter.php">Starter</a></li>
									<li><a href="menu/burgerandsandwiches.php">Burger and Sandwiches</a></li>
									<li><a href="menu/pizza.php">Pizza</a></li>
									<li><a href="menu/soup.php">Soup</a></li>
									<li><a href="menu/maincourse.php">Main Course</a></li>
									<li><a href="menu/groupmeals.php">Group Meals</a></li>
									<li><a href="menu/platter.php">Platter</a></li>
									<li><a href="menu/pasta.php">Pasta</a></li>
								</ul>
							</nav>
							<nav class="categorymenus">
								<div class="categorydropdowntitle">
									<h3>Pastries</h3>
								</div>
								<ul>
									<li><a href="menu/deserts.php">Dessert</a></li>
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
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/starter/Hash Brown.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Hash Brown</h4>
										<h5 class="dishprice">50.00 (2 pcs)</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/chicharap.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Chicharap</h4>
										<h5 class="dishprice">50.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/achara.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Achara</h4>
										<h5 class="dishprice">50.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/starter/Kimchy.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Kimchi</h4>
										<h5 class="dishprice">60.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/starter/Fries.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Fries</h4>
										<h5 class="dishprice">60.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/lumpiang shanghai.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Lumpiang Shanghai</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/starter/Mojos.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Mojos</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/potato wedge.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Potato Wedge</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/street foods.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Street Foods</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/starter/Natchos.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Nachos</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/cheesy bacon fries.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cheesy Bacon Fries</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/starter/Buffalo Wings.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Buffalo Wings</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Starter/fish and fries.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Fish and Fries</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Burger's &amp; Sandwiches</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/Burgers and sandwiches/Chicken SandWiches.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Chicken Sandwich</h4>
										<h5 class="dishprice">70.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/ham and egg sandwich.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Ham and Egg Sandwich</h4>
										<h5 class="dishprice">70.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/german frank hotdog.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">German Frank hotdog</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/angus beef hotdog.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Angus Beef Hotdog</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/cheese burger.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cheese Burger</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/bacon_Wrapped_cheese_buger.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Bacon Wrapped cheese Burger</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/midnight cheesy burger.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Midnight Cheesy Burger</h4>
										<h5 class="dishprice">140.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Burgers and Sandwiches/mid night-cheesy burger with bacon.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Midnight Cheesy Burger With Bacon</h4>
										<h5 class="dishprice">140.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Pizza</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/pizza/hawaiian.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Hawaiian</h4>
										<h5 class="dishprice">250.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/pizza/pepperoni.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Pepperoni</h4>
										<h5 class="dishprice">250.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/pizza/margherita.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Margherita</h4>
										<h5 class="dishprice">250.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/pizza/three cheese.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Three Cheese</h4>
										<h5 class="dishprice">250.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/pizza/all meat lovers.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">All Meat Lovers</h4>
										<h5 class="dishprice">280.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/pizza/sisig pizza.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Sisig Pizza</h4>
										<h5 class="dishprice">300.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Soup</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/soup/crab and corn soup.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Crab &amp; Corn Soup(6 - 7 Persons)</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/soup/nido soup.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Nido Soup(6 - 7 Persons)</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/soup/mashroom soup.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Mashroom Soup(6 - 7 Persons)</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/soup/lomi.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Lomi(6 - 7 Persons)</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Main Course</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Tapsilog.jpg" alt="">
									<figcaption class="dishcattitle">
										<h4 class="dishname">Tapsilog</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/tocilog.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Tocilog</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Noksilog.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Noksilog</h4>
										<h5 class="dishprice">99.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Pork Barbecue.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Chicken BBQ</h4>
										<h5 class="dishprice">88.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/buttered garlic chicken.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Butterd Garlic Chicken</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/chicken-oyster.jpeg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Chicken Oyster</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/pork BB.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Pork BBQ</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/pork teriyaki.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Pork Teriyaki</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Lechon Kawali.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Lechon Kawali</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Lechon Kawali.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Lechon Paksiw</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/burger steak.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Burger Steak</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Beef with garlic mashroom.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Beefy Garlic Mushroom</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Ribeye Steak.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Ribeye Steak</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/T-Bone Steak.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">T Bone Steak</h4>
										<h5 class="dishprice">250.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/main course/Boneless Bangus.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Boneless Bangus</h4>
										<h5 class="dishprice">88.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/butter lemon tanigue.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Butter Lemon Tanigue</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/fish fillet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Fish Fillet</h4>
										<h5 class="dishprice">100.00</h5>		
									</figcaption>
								</figure>	
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Platter</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/platter/pansit guisado.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Pansit Guisado</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/pansit canton.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Pancit Canton</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/sizzling tofu.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Sizzling Tofu</h4>
										<h5 class="dishprice">120.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/platter/Pork Sisig.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Pork Sisig</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/chopsuey.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Chopsuey</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/beef with brocolli.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Beef with Brocolli</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/beef kaldereta.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Beef Kaldereta</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/garden salad.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Garden Salad</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/mexicano sisig.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Mexicano Sisig</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/bestseller/lago/fried-chicken.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Fried Chicken</h4>
										<h5 class="dishprice">180.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/bestseller/cofftea/" alt="Buttered Garlic chicken">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">buttered Garlic Chicken</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/chicken-oyster.jpeg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Oyster Sauced Chicken</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/bestseller/cofftea/" alt="Bagnet">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Bagnet</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/bestseller/cofftea/crispy pata.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Crispy Pata</h4>
										<h5 class="dishprice">320.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/platter/Patatim.jpg" alt="patatim">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Patatim</h4>
										<h5 class="dishprice">350.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/bestseller/lago/" alt="chicharong bulaklak">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Chicharong Bulaklak</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/" alt="Dynamite">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Dynamite</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="" alt="kalamarez">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Kalamarez</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/" alt="Sizzling Curry pusit">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Sizzling Curry Pusit</h4>
										<h5 class="dishprice">250.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/platter/Sizzling Chicken.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Sizzling Chicken</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/ebitempura" alt="ebi tempura">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Ebi Tempura</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/butter lemon tanigue.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Butter Lemon Tanigue</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/platter/Fish Fillet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Fish Fillet</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/main course/" alt="salmon sashime">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Salmon Sashime</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/platter/Kilawin Tanigue.jpg" alt="kilawin tanigue">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Kilawin Tanigue</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/" alt="kilawing hipon">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Kilawing Hipon</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/" alt="sizling gambas">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Sizzling Gambas</h4>
										<h5 class="dishprice">200.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/platter/" alt="tuna sisig">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Tuna Sisig</h4>
										<h5 class="dishprice">150.00</h5>		
									</figcaption>
								</figure>	
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Pasta(with 2pcs of garlic bread)</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/pasta/Meaty Spaghetti.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Meaty Sphagetti</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/pasta/Creamy Carbonara.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Creamy Carbonara</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/pasta/Creamy Pesto.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Creamy Pesto</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Pasta/Tuna-Mushroom-Pasta (1).jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Tuna Mushroom Pasta</h4>
										<h5 class="dishprice">80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Pasta/Seafood-Pasta-Linguine.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Seafood Pasta Linguine</h4>
										<h5 class="dishprice">130.00</h5>		
									</figcaption>
								</figure>
							</div>
							
							<div class="dished">
								<figure>
									<img src="img/menus/Pasta/" alt="coffteas Special">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Coffteas Special</h4>
										<h5 class="dishprice">110.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
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
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/cafe americano.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cafe Americano</h4>
										<h5 class="dishprice">(12 oz) 70.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/cafe latte.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cafe Latte</h4>
										<h5 class="dishprice">(12 oz) 80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/cappuccino.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cappuccino</h4>
										<h5 class="dishprice">(12 oz) 80.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/Cafe_Mocha.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cafe Mocha</h4>
										<h5 class="dishprice">(12 oz) 90.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/cafe white mocha.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cafe White Mocha</h4>
										<h5 class="dishprice">(12 oz) 90.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/caramel machiato.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Caramel Machiato</h4>
										<h5 class="dishprice">(12 oz) 90.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/tiramisu latte.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Tiramisu Latte</h4>
										<h5 class="dishprice">(12 oz) 100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/salted-caramel-latte5.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Salted Caramel Latte</h4>
										<h5 class="dishprice">(12 oz) 100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/hot chocolate.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Hot Chocolate</h4>
										<h5 class="dishprice">(12 oz) 100.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/hot fresh milk.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Hot Fresh Milk</h4>
										<h5 class="dishprice">(12 oz) 60.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/hot tea.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Hot Tea</h4>
										<h5 class="dishprice">(12 oz) 50.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/Hot Drinks/Espresso-Shot1.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Espresso Shot</h4>
										<h5 class="dishprice">(12 oz) 30.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Iced Coffee</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/iced coffee/iced americano.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Iced Americano</h4>
										<h5 class="dishprice">(12 oz)60.00 (16 oz)70.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/iced coffee/iced latte.jpeg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Iced Latte</h4>
										<h5 class="dishprice">(12 oz)70.00 (16 oz)80.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/iced coffee/iced mocha.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Iced Mocha</h4>
										<h5 class="dishprice">(12 oz)80.00 (16 oz)90.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/iced coffee/iced white mocha.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Iced White Mocha</h4>
										<h5 class="dishprice">(12 oz)80.00 (16 oz)90.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/iced coffee/iced caramel.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Iced Caramel</h4>
										<h5 class="dishprice">(12 oz)80.00 (16 oz)90.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/iced coffee/iced-salted-caramel.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Iced Salted Caramel</h4>
										<h5 class="dishprice">(12 oz)90.00 (16 oz)100.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Frapuccino</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/frappucinno/Mocha Frapp.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Mocha</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/frappuccino/white mocha.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">White Mocha</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/frappuccino/caramel.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Caramel</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/frappucinno/Tiramisu.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Tiramisu</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/frappuccino/french mocha.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">French Mocha</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/frapuccino/" alt="salted caramel">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Salted Caramel</h4>
										<h5 class="dishprice">(12 oz)120.00 (16 oz)130.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/iced coffee" alt="coffee jelly">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Coffee Jelly</h4>
										<h5 class="dishprice">(12 oz)130.00 (16 oz)140.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Signature Drinks</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/signature drinks/Cookies And Cream.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cookies And Cream</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/java chip.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Java Chip</h4>
										<h5 class="dishprice">(12 oz)110.00 (16 oz)120.00</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/madagascar vanilla.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Madagascar Vanilla</h4>
										<h5 class="dishprice">(12 oz)130.00 (16 oz)140.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/matcha green tea.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Matcha Green Tea</h4>
										<h5 class="dishprice">(12 oz)130.00 (16 oz)140.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/dark chocolate.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Dark Chocolate</h4>
										<h5 class="dishprice">(12 oz) 130.00 (16 oz) 140.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/oreo with mint.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Orea With Mint</h4>
										<h5 class="dishprice">(12 oz) 130.00 (16 oz) 140.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/black forest.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Black Forest</h4>
										<h5 class="dishprice">(16 oz) 150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="crunch">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Crunch</h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/signature drinks/Toblerone.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Toblerone</h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/hersheys.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Hersheys</h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/kit kat.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Kit Kat</h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/nutella.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Nutella</h4>
										<h5 class="dishprice">(16 oz)160.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/signature drinks/Fererro Rocher.jpg" alt="fererro rocher">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Ferrero Rocher</h4>
										<h5 class="dishprice">(16 oz)160.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/1152017/signature drinks/Strawberry Cheesecake(16 oz).jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Strawberry Cheesecake</h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/red velvet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/rocky road.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dish" alt="ube keso">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/cotton" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice">(16 oz)150.00</h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Italian Soda</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/strawberry.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/green apple.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/passion fruit.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/watermelon.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/kiwi.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/apple.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/lemon.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/mango.jpg" alt="crunch">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/blue raspberry.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/itallian soda/lime.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Fruit Tea</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/fruit tea/" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/java chip.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/madagascar vanilla.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/matcha green tea.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/dark chocolate.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/oreo with mint.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/black forest.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="crunch">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/toblerone.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/hersheys.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/kit kat.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/nutella.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="terero rocher">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/red velvet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/rocky road.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="ube keso">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/cotton" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Yakult Drinks</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/java chip.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/madagascar vanilla.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/matcha green tea.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/dark chocolate.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/oreo with mint.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/black forest.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="crunch">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/toblerone.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/hersheys.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/kit kat.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/nutella.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="terero rocher">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/red velvet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/rocky road.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="ube keso">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/cotton" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Milk Tea</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/java chip.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/madagascar vanilla.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/wi" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/java chip.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/matcha green tea.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/new images/W" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/oreo with mint.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/black forest.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="crunch">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/toblerone.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/hersheys.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/kit kat.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/nutella.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="terero rocher">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/red velvet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/rocky road.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="ube keso">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/cotton" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="menucategory">
					<div class="dishtitle">
						<h4><span>Smoothies</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/menus/" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/java chip.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/madagascar vanilla.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/matcha green tea.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/dark chocolate.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/oreo with mint.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/black forest.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="crunch">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/toblerone.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/hersheys.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/kit kat.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/nutella.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="terero rocher">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/red velvet.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/rocky road.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/" alt="ube keso">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/menus/signature drinks/cotton" alt="sans reval">	
									<figcaption class="dishcattitle">
										<h4 class="dishname"></h4>
										<h5 class="dishprice"></h5>		
									</figcaption>
								</figure>
							</div>
						</div>
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
					<div class="dishtitle">
						<h4><span>Pastries</span></h4>
					</div>
					<div class="dishcatcontainer">
						<div class="dishcat">
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/20171022_155623.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Muffin</h4>
										<h5 class="dishprice">60.00</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/20171022_155055.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cheesecake BlueBerry</h4>
										<h5 class="dishprice">80.00 per sliced</h5>		
									</figcaption>
								</figure>	
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/20171022_155026.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cheesecake Strawberry</h4>
										<h5 class="dishprice">80.00 per sliced</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/20171022_154948.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cheesecake Oreo</h4>
										<h5 class="dishprice">80.00 per sliced</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/20171022_155149.jpg" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Cheesecake Nutella</h4>
										<h5 class="dishprice">80.00 per sliced</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/_MG_3739.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Dark Chocolate</h4>
										<h5 class="dishprice">100.00 per sliced</h5>		
									</figcaption>
								</figure>
							</div>
							<div class="dished">
								<figure>
									<img src="img/dishes/cofftea/dessert/_MG_3736.JPG" alt="">	
									<figcaption class="dishcattitle">
										<h4 class="dishname">Sans Rival Cake</h4>
										<h5 class="dishprice">100.00 per sliced</h5>		
									</figcaption>
								</figure>
							</div>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".dishcat").slick({
				infinite: true ,
				slidesToShow : 5,
				centerPadding: '60px',
				//slidesToScroll : 3,
				dots: true
			});
		});
	</script>
</body>
</html>