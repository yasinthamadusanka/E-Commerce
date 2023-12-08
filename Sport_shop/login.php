<?php
	session_start();
    $host="localhost";
	$user="root";
	$database="sportshop";
	$password="";

	if($conn=new mysqli($host,$user,$password,$database)){
		
	}else{
		echo'Error database connection';
		exit;
	}		

	if(isset($_SESSION['user_logged'])){
    header("Location:home.php");
    exit;
	}

	$error=[];
	if(isset($_POST['send'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$c_password=$_POST['c_password'];
		if($name !=""){
			if(strlen($name) > 4){
				if(strlen($password) > 6){
					if($password == $c_password){
						$password=md5($password);
						$sql="INSERT INTO registers (name,email,password,date) VALUES ('".$name."','".$email."','".$password."',".time().")";;
						if($conn->query($sql)){
							$success=true;
						}else{
							$error[]="Server error, please try again later";
						}
					}else{
						$error[]="Password not matched"; 
					}
				}else{
					$error[]="Password too short";
				}
				
			}else{
				$error[]="Invalid name, please type your name"; 
			}
		}else{
			$error[]="Error name, please type your name";
		}
	}
?>

<?php
    $error=[];
    if(isset($_SESSION['user_logged'])){
        header("Location:home.php");
        exit;
        //Exit if already logged
    }
    if(isset($_POST['login'])){
        $email=$_POST['emails'];
        $password=$_POST['passwords'];
        $password=md5($password);
        $sql="SELECT * FROM registers WHERE email='".$email."' AND password='".$password."'";
        if($user_data=$conn->query($sql)){
            if($user_data->num_rows > 0){
                $_SESSION['user_logged']=true;
                header("Location: home.php");
                exit;
                //success loggin
            }else{
                $error[]="Something wrong, please try again";
            }
        }else{
            $error[]="Something wrong, please try again";
        }
    }



    ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, scale=1.0">
<title>Shop</title>
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
		<a href="home.php"><img src="images/2-logo.png" width="258"></a>
		</div>
		<nav>
		<ul id="MenuItems">
			<li><a href="home.php" class="page">Home</a>
			</li>
			<li><a href="aboutus.php" class="page">AboutUs</a>
			</li>
			<li><a href="contactus.php" class="page">ContactUs</a>
			</li>
			<li><a href="shop.php" class="page">Shop</a>
			</li>
			<li><a href="login.php" class="page active">Account</a>
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

	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/all-sports-banner.png">
				</div>
				<div class="col-2" style="padding-bottom: 50px">
					<div class="form-container">
						<div class="form-btn">
							<span onClick="login()">Login</span>
							<span onClick="register()">Register</span>
							<hr id="Indicator">
						</div>
						
						<form method="post" id="LoginForm">
						<?php
                            if(!empty($error)){
                                foreach ($error as $key => $value) {
                                    ?>
                                        <div style="color: #8B0000; background-color: #ffcccb; font-size: 12px; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 12px; border-radius: 5px; font-family: Times New Roman, Times, serif;"><?php echo $value;?></div>
                                    <?php
                                }
                            }
                            ?>

							<input type="email" placeholder="Email" name="emails" id="email" required>
							<input type="password" placeholder="Password" name="passwords" id="password" required>
							<button type="submit" class="btn" id="login_bt" name="login">Login</button>
							<a href="">Forgot password</a>
						</form>
						
						<form method="post" id="RegForm">
						<?php
                            if(!empty($error)){
                                foreach ($error as $key => $value) {
                                    ?>
                                        <div style="color: #8B0000; background-color: #ffcccb; font-size: 12px; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 12px; border-radius: 5px; font-family: Times New Roman, Times, serif;"><?php echo $value;?></div>
                                    <?php
                                }
                            }
                            if(isset($success)){
                                ?>
                                    <div style="color: #008000; background-color: #daf9da; font-size: 12px; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 12px; border-radius: 5px; font-family: Times New Roman, Times, serif;">Registration Successful</div>
                                <?php
                            }
                        ?>

							<input type="text" placeholder="Username" name="name" id="name" required>
							<input type="email" placeholder="Email" name="email" id="email" required>
							<input type="password" placeholder="Password" name="password" id="password" required>
							<input type="password" placeholder="Confirm Password" name="c_password" id="c_password" required>
							<button type="submit" class="btn" id="register_bt" name="send">Register</button>
						</form>
					</div>
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
	
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");
		
		function register(){
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(100px)";
			
		}
		
		function login(){
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indicator.style.transform = "translateX(0px)";
			
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
