<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo "<link rel=\"stylesheet\"  type=\"text/css\" href=\"../css/normalize.css\">" . "\n"; ?>
    <?php echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css\" type=\"text/css\">" . "\n"; ?>
    <?php echo "<script type=\"text/javascript\" src=\"../js/html5shiv.min.js\"></script>" . "\n"; ?>
    <?php echo "<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js\"></script>\n"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"/>
    <script src="../js/html5shiv.min.js"></script>
	<title>Stater menu</title>
    <?php echo "<link type=\"text/css\" href=\"../css/personalcssreset.css\" rel=\"stylesheet\">\n";?>
    <?php echo "<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">\n"; ?>
    <?php echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"; ?>
    <?php echo "<meta name=\"author\" content=\"George David Withmore\">\n"; ?>
    <?php echo "<meta name=\"keywords\"  content=\"lago , cofftea , martinas , ktv ,coffee , coffeeshop , coffebeans , beverages , dishes \">\n";?>
    <?php echo "<meta property=\"og:type\" content=\"website\">\n";?>
    <?php echo "<meta property=\"og:locale\" content=\"en_PH\">";?>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/lagocafeStyle.css">
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
				<img src="../img/cofftealogo.png" alt="cofftea">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../coffteamenu.php">Our Menu</a>
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
					<li><a href="../services.php">Services</a></li>
					<li><a href="../gallery.php">Gallery</a></li>
					<li><a href="../aboutus.php">About Us</a></li>
					<li><a href="../contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<section id="menucontainer">
			<div class="menudevider " id="coffteamenus">
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