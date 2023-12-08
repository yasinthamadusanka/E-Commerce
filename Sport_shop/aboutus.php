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
<title>AboutUs</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
	<div class="container">
	<div class="navbar">
	<div class="logo">
		<a href="home.ph"><img src="images/2-logo.png" width="258"></a>
		</div>
		<nav>
		<ul id="MenuItems">
			<li><a href="home.php" class="page">Home</a>
			</li>
			<li><a href="aboutus.php" class="page active">AboutUs</a>
			</li>
			<li><a href="contactus.php" class="page">ContactUs</a>
			</li>
			<li><a href="shop.php" class="page">Shop</a>
			</li>
			<li><a href="login.php" class="page">Account</a>
			</li>
			<li><a href="logout.php" class="page">Logout</a>
			</li>
		</ul>
		</nav>
		<a href="shop.ph"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
	</div>	
	</div>
	</div>
	
	<div class="about-container">
	<div class="row">
			<div class="col-6">
			<img src="images/my.jpg" width="300px" >
			</div>
			
			<div class="col-2">
				<h1 style="text-align: center" class="title">About Us</h1>
			<p>From day one, everything we do is user-centered. Why? Since clients are individuals. To reach individuals, we must get it them. Get to know them. Take a walk in their recreations. We know the affect is earned and the affect can happen - as it were when we get out of our claim way. It could be a people-centered involvement. That's why we came here. We people have went through 20 a long time. How? By winning individuals over, we are making a maintainable advantage, not for a minute. By designing better approaches of working, we engage ourselves to turn radical thoughts into industry measures. By making traditional client ships a genuine association, we guarantee that we continuously do the proper thing. So yes. That’s what we cruel when we say it’s not approximately us. Since it isn't so and has never been so.</p>
				
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

