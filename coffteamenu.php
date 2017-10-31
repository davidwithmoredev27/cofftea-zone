<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Our Menu</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
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
					<li><a href="coffteamenu.php">Our Menu</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<section id="menucontainer">
			<div class="menucategory">
				<div class="category"><a href="#food">food</a></div>
				<div class="category"><a href="#beverage">speciality beverage</a></div>
				<div class="category"><a href="#pastries">pastries</a></div>
			</div>
			<div class="menudevider" id="coffteamenus">
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
			</div>
			
			<!-- Drinks -->
	
			<div class="menudevider" id="coffteamenus">
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
			</div>


			<!-- Dessert-->

			<div class="menudevider" id="coffteamenus">
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
						<p>email: <span>LagoCafe.2017@gmail.com</span></p>
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
				<!-- <div class="hours">
					<div class="hoursdevider">
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>COFFTEA HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>11:00 AM to 12:00 AM</p>
							</div>
						</div>
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>LAGO HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>4:00 PM to 2:00 AM</p>
								<h5>Bands</h5>
								<p>9:00 PM to 1:00 AM</p>
							</div>
						</div>
					</div>
					<div class="hoursdevider">
						<div class="hourscontainer" style="padding-top: 10px;">
							<div class="hourstitle">
								<h3>MARTINAS HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>12:00 Noon to 11:00 PM</p>
							</div>
						</div>
						<div class="hourscontainer" style="padding-top: 10px;">
							<div class="hourstitle">
								<h3>KTV BAR HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>2:00 PM to 2:00 AM</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
			</div>
		</footer>
	</div>
	<script type="text/javascript">
		
		/*var dishtxthover = document.getElementsByClassName("menutexthover");
		var descriptiontxt = document.getElementsByClassName("descriptiontxt");

		var showDescription = function () {
			var showIndex = this;
			descriptiontxt[showIndex].style.display = "inline";
			
			for (var finder = 0 ; i < dishtxthover.length ; finder++) {
				
			}

		};
		var hideDescription = function () {
			var hideIndex = this.length;
			descriptiontxt[hideIndex].style.display = "none";
		};


		for (var i = 0 ; i < dishtxthover.length ; i++) {
			dishtxthover[i].addEventListener('mouseover' , showDescription , false);
		} 

		for(var ii = 0 ; ii < dishtxthover.length ; ii++) {
			dishtxthover[ii].addEventListener('mouseout' , hideDescription , false);
		}*/
	</script>
</body>
</html>