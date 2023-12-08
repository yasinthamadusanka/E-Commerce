<?php 
	// checking if a user is logged in
    session_start();
	if (!isset($_SESSION['user_logged'])) {
		header('Location: login.php');
	}
 ?>

<?php
    $db_name = "sportshop";
    $connection = mysqli_connect("localhost","root","",$db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="shop.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="shop.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="shop.php"</script>';
                }
            }
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

<style>
        .product{
            margin: 0px 2px 50px 2px;
            padding: 10px;
            text-align: center;
            background: radial-gradient(#33ccff,#ff99cc);
            border-radius: 25px;
            border: 1px solid;
            box-shadow: 10px 10px 5px grey;
        }

        table,th,tr{
              text-align: center;
        }

        
         td, th{
            border: 1px solid black;
            padding: 8px;
        } 

        .title2{
            text-align: center;
            color: #483D8B;
            padding: 2%;
        }

        .title{
            padding-top: 20px;
        }


        .button{
            background-color: #FF6347;
            border: none;
            color: white;
            padding: 7px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 30px;
            margin-top: 5px;
        }

        .remove{
            color: red;
            text-decoration: none;
        }

        span .remove{
            text-align: center;
        }

        span:hover{
            color: #b30000;
        }


        .table-responsive{
            padding-bottom: 40px;
        }

        .tab{
            font-family: Arial, Helvetica, sans-serif;
            width: 70%;
            margin-left: auto; 
            margin-right: auto;
        }

        .table-heading-row{
            background-color: aqua;
        }

        .form-control{
            text-align: center;
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
			<li><a href="home.php" class="page">Home</a>
			</li>
			<li><a href="aboutus.php" class="page">AboutUs</a>
			</li>
			<li><a href="contactus.php" class="page">ContactUs</a>
			</li>
			<li><a href="shop.php" class="page active">Shop</a>
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
	
	<div class="smaller-container">
              
        <h2 style="text-align: center" class="title">Shopping Cart</h2>
        <?php
            $query = "select * from shop order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?> 
                    <div class="row" style="float: left; padding-left: 47px;">
                        <form method="post" action="shop.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>" style="padding-top: 10px;" width="190px" height="200px">
                                <p><?php echo $row["name"];?></p>
                                <p><?php echo $row["price"];?></p>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" class="button" value="Add to cart">
                            </div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h2 class="title2">Shopping Cart Details</h2>
        <div class="table-responsive">
            <table class="tab">
            <tr class="table-heading-row">
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="shop.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="remove">Remove Item</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3"><b>Total</b></td>
                        <td align="center"><b><?php echo number_format($total,2);?></b></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
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
