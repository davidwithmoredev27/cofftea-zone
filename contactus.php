<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>contact us</title>
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
		<!-- <section id="menubannercontainer" class="contactusbanner">
			<div id="caption">
				<h1>Contact Us</h1>
			</div>		
		</section> -->
		<section  class="contactusinfo">
			<div class="contactcontainer">
				<section id="forinquiries">
					<form action="" method="POST">
						<div class="fillupname">Name:</div>
						<input type="text"  id="name" name="name" maxlength="32" placeholder="enter your name"><br>
						<div class="fillupname">Email:</div>
						<input type="email" id="email" name="email" maxlength="32" placeholder="enter your email"><br>
						<div class="fillupname">Phone:</div>
						<input type="text"  id="phone" name="phone" maxlength="11" placeholder="please provide your email address"><br><br>
						<div class="fillupname">Message:</div>
						<br>
						<textarea name="message" id="textarea" cols="35" rows="10">
						</textarea>
						<br>
						<br>
						<input  id="send" type="submit" name="sendbtn" value="send">
					</form>
				</section>
				<section id="contactinfotxt" class="floatright">
					<div class="infodivider">
						<h2 class="title">Address</h2>
						<p><span>851 Manila Cavite Road, Dalahican Cavite City,<br>Philippines.</span></p>
					</div>
					<div class="infodivider">
						<h2 class="title">Contact Number</h2>
						<span>Telephone: 402-0556</span><br>
						<span>Mobile: 09177049806</span>
					</div>
					<div class="infodivider">
						<h2 class="title">Email Address</h2>
						<p>email: <span>Coffteazone2017@gmail.com</span></p>
					</div>
					<div class="infodivider">
						<h2 class="title">Operating Time</h2>
						<p>Cofftea Zone: Monday to Sunday 11:00 AM to 12:00 AM</p>
						<p>Martinas: Monday to Sunday 9:00 AM to 12:00 AM</p>
						<p>KTV Bars: Monday to Sunday 9:00 AM to 12:00 AM</p>
						<p>Inquiry and Reservation is open from 8:00 AM to 8:00 PM, Monday to Sunday</p>
					</div>	
				</section>
			</div>
			<section id="location">
				<iframe id="googlemap" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyARxhpxiWUY-LpAarBxi8SWL6eblcc8YZk&q=Cofftea+Zone&zoom=17&maptype=satellite" allowfullscreen></iframe>
			</section>
			<section id="emailcontainer">
				<div class="titleandesc">
					<div class="emailtitle">
						<h4>JOIN OUR MAILING LIST</h4>
					</div>
					<div class="emaildescription">
						<p>Enter your email below to stay up to date on our special offers.</p>
					</div>
				</div>
				<div class="updates">
					<form action="" method="post">
						<input type="email" placeholder="Email:" maxlength="32">
						<input type="submit" name="email" value="Send me Updates">
					</form>
				</div>
			</section>
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
						<p>Telephone: 418-31-56</p>
						<p>Mobile: 09177049806</p>
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
		// if form is loaded try to validate any wrong inputs
		window.onload = function () {
			// get all necessary inputs for validation
			var name = document.getElementById("name")[0];
			var email = document.getElementById("email")[0];
			var phone = document.getElementById("phone")[0];
			var send = document.getElementById("send")[0];
			var textarea = document.getElementById("message")[0];

	
			var eventsFunctions = function(nameevent, emailevent , phoneevent, sendevent, textevent) {
				var checkforAllInputs = function() {
					if (nameevent.value.length > 8) {
						console.log("value are less that 8 characters");
						return false;
					} else if (nameevent.value) {

					}
				};
				sendevent.addEventListener("click" , function () {

				});
			};
			eventsFunctions(name , email ,phone , send , textarea);
		};
	</script>
</body>
</html>

<!-- AIzaSyARxhpxiWUY-LpAarBxi8SWL6eblcc8YZk  -->