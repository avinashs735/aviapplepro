<?php
		include('connection.php');
		session_start();
	$_SESSION['id']=="";
	?>

<html >
<head>
    
    <title>Detail| Product</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
<style type="text/css">

.thumbnails img {
	height: 60px;
	padding: 1px;
	margin: 0 10px 10px 0;
}
.thumbnails img:hover {
	border: 4px solid #00ccff;
	cursor:pointer;
}

.preview img{
	padding: 1px;
	width: 160px;
	height: 300px
}

#search{
    width: 150px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 12px;
    color:#2a723b;
	background-color:#e1e8ef;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

#search:focus {
    width: 200px;
}
</style>
	
	
    
	
	
	
    
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><img src="ph.png"> +91-8576810694</a></li>
								<li><a href="#"><img src="msg.png"> avinashs735@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul>
								<li><a href="#"><img src="fb.png"></a></li>
								<li><a href="#"><img src="twi.png"></a></li>
								<li><a href="#"><img src="link.png"></a></li>
								<li><a href="#"><img src="inst1.png"></a></li>
								<li><a href="#"><img src="gplus.png"></a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li>
								<?php
				
										if ($_SESSION['id'] == "")
										{
											echo "<a href='login.php'><i class='fa fa-user'></i>Account</a>";
										}
										else
										{
											echo "<a href='account.php'><i class='fa fa-user'></i>Account</a>";
										}
									?>
								</li>
								<li>
								<?php
				
										if ($_SESSION['id'] == "")
										{
											echo "<a href='login.php'><i class='fa fa-crosshairs'></i>Checkout</a>";
										}
										else
										{
											echo "<a href='checkout.php'><i class='fa fa-crosshairs'></i>Checkout</a>";
										}
									?>
								</li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart
								</a></li>
								<li>
								<?php
				
										if ($_SESSION['id'] == "")
										{
											echo "<a href='login.php'><i class='fa fa-lock'></i>Login/SignUp</a>";
										}
										else
										{
											echo "<a href='logout.php'><i class='fa fa-unlock'></i> Logout</a>";
										}
									?>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="iindex.php"><img src="admin/mobileimage/ap2.jpg"  width ="500px" height="90px" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="iindex.php" class="active"><b>Home</b></a></li>
								<li><a href="about-us.php"><b>About us</b></a>
                                </li> 
																<li><a href="contact-us.php"><b>Contact Us</b></a></li>
							</ul>
						</div>
					</div>
					<div style="float:right">
															<form method="GET" class="searchform" action="search.php">
															<input type="text" id="search" name="search" placeholder="Search..">
															</form>
															</div> 
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						
					
						<div class="brands_products"><!--brands_products-->
							<h2>Apple Product</h2>
							<div class="brands-name">
								
							</div>
						</div><!--/brands_products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items home_feature"><!--features_items-->
						<h2 class="title text-center">Items</h2>
						<?php
							$prod_id=$_REQUEST['prod_id'];

							$sql="select * from tbl_product WHERE prod_id = '$prod_id'";
							//echo $sql;
							$r=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($r))
							{							
								$ProdId=$row['prod_id'];
								$ComId=$row['com_id'];
								
						?>
						<div class="col-sm-9 padding-right">
						<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="preview"  >
								<img  name="preview" src="admin/mobileimage/<?php echo $row['image']; ?>" alt="" />
							</div>
							<div class="thumbnails">
								<img  onmouseover="preview.src=img.src" name="img" src="admin/mobileimage/<?php echo $row['image']; ?>" alt="" />
								<img  onmouseover="preview.src=img2.src" name="img2" src="admin/mobileimage/<?php echo $row['image2']; ?>" alt="" />
								<img  onmouseover="preview.src=img3.src" name="img3" src="admin/mobileimage/<?php echo $row['image3']; ?>" alt="" />
								<img  onmouseover="preview.src=img4.src" name="img4" src="admin/mobileimage/<?php echo $row['image4']; ?>" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2><?php echo $row['prod_name'] ?></h2>
								<p><?php echo $row['prod_id'] ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<p><?php echo $row['description'] ?>
								<span>
									<span><?php echo $row['price'] ?></span>
									<label>Quantity:<?php echo $row['quantity'] ?></label>
									<br>
									<a href="cart.php?prod_id=<?php echo $row['prod_id'] ?>" <button type="button" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>
										Add to cart
									</button></a><br>
									<?php
				
										if ($_SESSION['id'] == "")
										{
											echo "<a href='login.php'><button type='button' class='btn btn-fefault buy1' >Buy Now</button></a>";
										}
										else
										{
											echo "<a href='cart.php?prod_id=$row[prod_id]'><button type='button' class='btn btn-fefault buy1' >Buy Now</button></a>";
										}
									?>
									
								</span>
								<p><b>Availability:</b> In Stock</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
						</div>
						<?php
							}
						?>
						
					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Apple web services</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								
								<li><a href="#">Reviews</a></li>
								<li><a href="#">0% Finance</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Contact Us Information</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="contact-us.php">Telephone/Email us</a></li>
								<li><a href="contact-us.php">Feedback</a></li>
								<li><a href="contact-us.php">Press</a></li>
								<li><a href="contact-us.php">Report a bug</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Returns and Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								
								<li><a href="#">Delivery policy</a></li>
								<li><a href="#">Shipping locations</a></li>
								<li><a href="#">Click & Collect</a></li>
								<li><a href="#">Bulk purchases</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Other Information</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								
								<li><a href="#">Competition</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Apple web services</h2>
							<form action="#" class="searchform">
								<img alt="brand" src="admin/mobileimage/logo.png" width ="80px" height ="80px"class="img-circle" align="center">
								<p>You demand Technology<br />We will serve that to you...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Apple Web Services All rights reserved<br>
					Apple web Services is indias no. 1 website to get updated with latest gadgets from i- phone</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	
    
</body>
</html>