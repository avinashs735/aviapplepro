<?php   session_start();
		include('connection.php');
		
?>

<html>
<head>

<title>Home page|AWS</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/main.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
   
    <link href="css/slider.css" rel="stylesheet">
<style>
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
* {box-sizing:border-box}

.mySlides {display:none}

/* Slideshow container */
.showslide-box {
  max-width: 800px;
  position: relative;
  margin-left: 300px;
  font-family: Verdana,sans-serif;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.avi {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes avi {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes avi {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"> <img src="ph.png">+91 8576810694 </a></li>
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
							<ul class="nav navbar-nav collapse navbar-collapse oncl" ">
								<li><a href="iindex.php" class="active oncl"><b>Home</b></a></li>
								<li><a href="about-us.php" class="oncl" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"><b>About us</b></a>
                                </li> 
								
								<li><a href="contact-us.php"class="oncl" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='black'"><b>Contact Us</b></a></li>
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
	
<div class="showslide-box">

<div class="mySlides avi">
  <div class="numbertext">1 / 3</div>
  <img src="images/home/slide1.jpg" style="width:800px;height:300px">
  <div class="text">Standard</div>
</div>

<div class="mySlides avi">
  <div class="numbertext">2 / 3</div>
  <img src="images/home/slide2.png" style="width:800px;height:300px">
  <div class="text">Status</div>
</div>

<div class="mySlides avi">
  <div class="numbertext">3 / 3</div>
  <img src="images/home/slide3.png" style="width:800px;height:300px">
  <div class="text">Satisfaction</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						
					
						<div class="brands_products"><!--brands_products-->
							<h2 style="color:30a980">Product Type </h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<li><h3>I-Phone</h3></li>
								<li><h3>Macbook	</h3></li>							
								<li><h3>Ipad</h3></li>
								<li><h3>I Tv</h3></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right" style="color:30a980">
					<div class="features_items home_feature"><!--features_items-->
						<h2 class="title text-center" style="color:30a980">Featured Items</h2>
						<div id="product_loading">
						<?php
					
							$sql="select * from tbl_product";

							$r=mysqli_query($con,$sql);
														
							while($row = mysqli_fetch_assoc($r))
							{							
								$ProdId=$row['prod_id'];
								$ComId=$row['com_id'];
								
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center oncl">
											
											<?php// simage($row['image']) ?>
											<img class="home_img" src="admin/mobileimage/<?php echo $row['image']; ?>" height="300px" width="197px" /><br><br>
											<h2 class="price" style="color:30a980">Rs.<?php echo $row['price'] ?></h2><br>
											<h2 class="pro_name" style="color:30a980"><?php echo $row['prod_name'] ?></h2>
											<a href="cart.php?prod_id=<?php echo $row['prod_id'] ?>"  class=" btn btn-default add-to-cart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"><i class='fa fa-shopping-cart'></i>Add to cart</a>
											<a href="proddetail.php?prod_id=<?php echo $row['prod_id'] ?>"  class=" btn btn-default view1" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'">View Details</a>	
										</div>
										
								</div>
							</div>
						</div>
						<?php
							}
						?>
						
					</div>
					
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
	
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
