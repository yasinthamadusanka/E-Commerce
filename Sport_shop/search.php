
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

.small-container .ro{
	padding-top: 30px;
}

.product{
            margin: 0px 2px 50px 2px;
            padding: 10px;
            text-align: center;
            background: radial-gradient(#33ccff,#ff99cc);
            border-radius: 25px;
            border: 1px solid;
            box-shadow: 10px 10px 5px grey;
			
        }
		
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

  
  @media only screen and (max-width: 600px){

.smaller-container{
 padding-left: 40px;
}

.smaller-container .title{ 
 line-height: 60px;
 margin: 100px 0;
}

.row{
	 text-align: center;
	 margin-right:15px;
 }
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


		<?php
			 $db_name = "sportshop";
			 $connection = mysqli_connect("localhost","root","",$db_name); 

			 $search = $_POST['search'];

			$sql = "SELECT * FROM shop WHERE name LIKE '%$search%'";

			$res = mysqli_query($connection, $sql);

			$count = mysqli_num_rows($res);

			if ($count > 0){
				while($row = mysqli_fetch_assoc($res)){
					$id = $row['id'];
					$name = $row['name'];
					$image = $row['image'];
					$price = $row['price'];
					?>

					<div class="row" style=" padding-left: 50px;">
						<div class="product">
						<img src="<?php echo $image; ?>" alt="" style="padding-top: 10px;" width="190px" height="200px">
					
						<p><?php echo $name; ?></p>
						
						<p><?php echo $price; ?></p>
					</div>
				 </div>
				<?php

				}

			}else{
				echo "<div style='color: #8B0000; margin-right: 350px; margin-left: 350px; background-color: #ffcccb; font-size: 12px; padding-top: 10px; padding-bottom: 10px; text-align: center; padding-left: 12px; border-radius: 5px; font-family: Times New Roman, Times, serif;'>There is no product matching your search....</div>";
			}

			?>
</div>


<div class="testimonial">
		<div class="small-container">
			<div class="row" >
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
