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
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		
.small-container .search {
	width: 100%;
	position: relative;
	display: flex;
  }
  
  .search .searchTerm {
	width: 100%;
	border: 3px solid #00B4CC;
	border-right: none;
	padding: 5px;
	height: 36px;
	border-radius: 5px 0 0 5px;
	outline: none;
	color: #9DBFAF;
	font-size: medium;
	text-align: center;
  }
  
  .searchTerm:focus{
	color: #05383f;
  }
  
  .search .searchButton {
	width: 40px;
	height: 36px;
	border: 1px solid #00B4CC;
	background: #00B4CC;
	text-align: center;
	color: #fff;
	border-radius: 0 5px 5px 0; 
	cursor: pointer;
	font-size: 20px;
	margin-top: 10px;
  } 

	</style>
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
			<li><a href="home.php" class="page active">Home</a>
			</li>
			<li><a href="aboutus.php" class="page">AboutUs</a>
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
		<a href="shop.php"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
	</div>
		<div class="row">
			<div class="col-2">
				<h1 style="text-align: center">All Sports goods in one place!</h1>
			<p>You have reached great places, today is your day.<br>  Online shopping is the best way.hard work agins success. Greatness will come.</p>	
			<a href="" class="btn">Explore Now &#8594</a>	
			</div>
			<div class="col-2">
			<img src="images/all-sports-banner.png" >
			</div>
			
		</div>
	</div>
</div>
	
	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="images/sport2.jpg" >
			</div>
			<div class="col-3">
				<img src="images/sport4.jpg" >
			</div>
			<div class="col-3">
				<img src="images/sport3.jpg" >
			</div>
		</div>
	</div>
</div>



	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<form action="search.php" method="post" class="search">
     		 <input type="text" name="search" class="searchTerm" placeholder="What are you looking for?">
      		 <button type="submit" name="submit" class="searchButton"> 
			 <i class="fa fa-search"></i>
			
             </button>
		</form>
  	

		<div class="row">
		  <div class="col-4">
				<img src="images/football.jpg" alt="">
			    <div class="overlay">
			  		<div class="text">
						<h4 style="text-align: center"><b>Adidas Uniforia</b></h4>
						<p>The official Euro 2020 ball is one of the leading footballers to inspire this summer. It may be a cheaper form and is accessible in a distinctive color. It rises through the discuss for a low-level show.</p></div>
			   </div>
				<h4>Football</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
			  </div>
				<p>Rs.1090</p>
			</div>
			<div class="col-4">
				<img src="images/ledarball.jpg" >
				<div class="overlay">
				<div class="text">
					<h4 style="text-align: center"><b>Kookaburra Pace</b></h4>
						<p>This Cricket ball is suitable for the Tournament level players. It is water proof ball so you can play in the moisture condition. This ball have 5 layer Wuiled centre.</p></div>
				</div>
				<h4>Cricket Ball</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
			  </div>
				<p>Rs.2450</p>
			</div>
			<div class="col-4">
				<img src="images/batminton.jpg" >
				<div class="overlay">
					<div class="text">
						<h4 style="text-align: center"><b>Yonex Nanoray 20</b></h4>
						<p style="text-align: center">The Nanoray 20 is perfect for casual players, as it comes with the necessary features for a good performance. Pros is Good power, excellent tension, very fast, light-weight.</p>
					</div>
				</div>
				
				<h4>Badminton Racket</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
			  </div>
				<p>Rs.1616</p>
			</div>
			<div class="col-4">
				
				<img src="images/vollyball.jpg" >
				<div class="overlay">
				<div class="text">
						<h4 style="text-align: center"><b>Mikasa</b></h4>
						<p>The standard volleyball.  The ball used in beach volleyball is generally brightly colored, made of soft material, and is a bit larger in size than the indoor volleyballs.there are come in many colors.</p>
			
				</div>
				</div>
				<h4>Volleyball</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
			  </div>
				<p>Rs.1550</p>
			</div>
			<div class="col-4">
			
				<img src="images/bat.jpg" >
				<div class="overlay">
					<div class="text">
						<h4 style="text-align: center"><b>Kookaburra</b></h4>
						<p>The length of the bat is 38 / 96.5 cm. The blade of the cricket bat is made entirely of wood and is 4 1/4 / 10.8 cm wide.Covered with materials for protection, strengthening or repair.</p>
				
					</div>
				</div>
				<h4>Cricket Bat</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
			  </div>
				<p>Rs.12990</p>
			</div>
			<div class="col-4">
			
				<img src="images/rugbyball.jpg" >
				<div class="overlay">
					<div class="text">
						<h4 style="text-align: center"><b>Gilbert Replica</b></h4>
						<p>The Ball is perfect for those wanting a high quality ball to practice training and handling at home. All Gilbert replica rugby balls include the trademark Gilbert ellipses, and are made with 3 Ply backing material.</p>
					</div>
				</div>
				<h4>Rugbyball</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
			  </div>
				<p>Rs.1290</p>
			</div>
			<div class="col-4">
			
				<img src="images/basketball.jpg" >
				<div class="overlay">
					<div class="text">
						<h4 style="text-align: center"><b>Wilson</b></h4>
						<p>While this material may be expensive, it’s soft and supple. Its biggest advantage is a boost in control — even when your palms are sweaty, leather balls are made to maintain a high level of grip. It also helps avoid damage.</p>
					</div>
				</div>
				<h4>Basketball</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
			  </div>
				<p>Rs.2190</p>
			</div>
			<div class="col-4">
				
				<img src="images/boxing.jpg" >
				<div class="overlay">
					<div class="text">
						<h4 style="text-align: center"><b>Adidas</b></h4>
						<p> Amateur boxing competitions tend to use a specific style of gloves, which are usually provided to the fighters by the promotion. The gloves are typically coloured red or blue, depending on the fighters corner.</p>
					</div>
				</div>
				<h4>Boxing Gloves</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
			  </div>
				<p>Rs.3290</p>
			</div>
		</div>
	
	<div class="offer">
		<div class="small-container">
			<div class="row">
			<div class="col-2">
				<img src="images/offer1.png" class="offer-img">	
			</div>
			<div class="col-2">
			<p>Exclusively Available on Sportshop</p>
			<h1>PUMA Future Z 1.1 'Teaser Edition' </h1>
			<small>Those designed for grass pitches have studs on the outsole to aid grip.This football boot is made from a combination of synthetic fibers, with or without additional leather.</small><br>
			<a href="shop.php" class="btn">Buy Now &#8594;</a>
			</div>	
		</div>
	</div>
</div>
	
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Great customer service and quality products which do not break the bank!</p>
					<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
			  </div>
				<img src="images/kumara.jpg">
					<h3>Kumara sangakkara</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Always receive boxing gloves quickly and never had any problems.</p>
					<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
			  </div>
				<img src="images/mary.jpg">
					<h3>Naomh Mairtin</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p> This store has been the as it were one online which has not swelled its costs.</p>
					<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
			  </div>
				<img src="images/jonelle.jpg">
					<h3>Jonelle Filigno</h3>
				</div>
			</div>
		</div>
	</div>
</div>	
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/nike.jpg">
				</div>
				<div class="col-5">
					<img src="images/adidas.jpg">
				</div>
				<div class="col-5">
					<img src="images/reebok.jpg">
				</div>
				<div class="col-5">
					<img src="images/asics.jpg">
				</div>
				<div class="col-5">
					<img src="images/puma.jpg">
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