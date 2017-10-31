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
					<li><a href="coffteamenu.php">Our Menu</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
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
						<h2 class="title">email address</h2>
						<p>email: <span>justine.ponsones@gmail.com</span></p>
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
						<input type="email" placeholder="email:" maxlength="32">
						<input type="submit" name="email" value="Send me Updates">
					</form>
				</div>
			</section>
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
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
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