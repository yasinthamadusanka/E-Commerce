<?php 
	// checking if a user is logged in
	session_start();
	if (!isset($_SESSION['user_logged'])) {
		header('Location: login.php');
	}
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, scale=1.0">
<title>ContactUs</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
	<div class="container">
	<div class="navbar">
	<div class="logo">
		<a href="home.php"><img src="images/2-logo.png" width="258"></a>
		</div>
		<nav>
		<ul id="MenuItems">
			<li><a href="home.php" class="page">Home</a>
			</li>
			<li><a href="aboutus.php" class="page">AboutUs</a>
			</li>
			<li><a href="contactus.php" class="page active">ContactUs</a>
			</li>
			<li><a href="shop.php" class="page">Shop</a>
			</li>
			<li><a href="login.php" class="page">Account</a>
			</li>
			<li><a href="logout.php" class="page">Logout</a>
			</li>
		</ul>
		</nav>
		<a href="shop.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
	   </div>	
	  </div>
	</div>
	

	<div class="contact-container">
	<div class="row">
			<div class="col-7">
			<h2 style="text-align: center" class="title">Our Location on Maps</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.704419911406!2d79.93689411437778!3d7.04397999491224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f9c0d1b263b5%3A0x2f24886631ef12b8!2sGamunu%20Mawatha%2C%20Ragama%2011010!5e0!3m2!1sen!2slk!4v1622641631111!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
			
			<div class="col-2">
				<h1 class="contact-title">Contact Us</h1>
			 <p>We are located in Ragama.<br>You can easily find us. Our office is at in front of Thewathta church.<br>Call us: +94 70 295 6968</p>
			<div class="icon">
                <a href="https://www.facebook.com/yasintha.madusanka" target="blank" class="fa fa-facebook" width="20px" ></a>
                <a href="" target="blank" class="fa fa-twitter"></a>
				<a href="" target="blank" class="fa fa-google"></a>
                <a href="https://www.linkedin.com/in/yasintha-alawathugoda-a545a01a9/" target="blank" class="fa fa-linkedin"></a>
   			</div>
				
		</div>
	</div>
</div>
	
	
	
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phone.</p>
					<div class="app-logo">
						<img src="images/play-store.png">
						<img src="images/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/2-logo.png" >
					<p>Our objective is to supply the bliss and benefits of the wear to numerous in a feasible way</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
					<li>Facebook</li>
					<li>YouTube</li>
					<li>Instagram</li>
					<li>Linkedin</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">2021 © Sportshop.lk</p>
		</div>
	</div>
	<script>
		var MenuItems = document.getElementById("MenuItems");
		
		MenuItems.style.maxHeight = "0px";
		
		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
				{
					MenuItems.style.maxHeight = "200px"
				}
			else
				{
					MenuItems.style.maxHeight = "0px"
				}
		}
	</script>
	
	<script>

		var header = document.getElementById("MenuItems");
		var page = header.getElementsByClassName("page");
		for (var i = 0; i < page.length; i++) {
  			page[i].addEventListener("click", function() {
  			var current = document.getElementsByClassName("active");
  			current[0].className = current[0].className.replace(" active", "");
  			this.className += " active";
  			});
			}
	</script>
	
</body>
</html>
