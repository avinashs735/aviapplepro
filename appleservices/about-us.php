<?php
		include('connection.php');
		session_start();
	
?>

<html >
<head>
   
    <title>About-US|AWS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

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
}</style> 
	<script src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(12.9692 ,79.1559);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Head Office!"
  });

infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  
  
    
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><img src="ph.png"> +91 8576810694</a></li>
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
							<ul class="nav navbar-nav collapse navbar-collapse oncl" onmouseover="chck()">
								
								<li><a href="iindex.php" class=" active oncl" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"><b>Home</b></a>
                                </li> 
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
	
	<div id="googleMap"  style="width:500px;height:380px;" class="container">
    		
    </div><!--/#contact-page-->
	<div class="container" style="width:100%;height:400px">
<div id="title" style="text-align:center;height:50px;width:100%;font-family: Arial, Helvetica, sans-serif;  font-style: normal;font-size:17px;color: #99a3a4"><h2>Web Service developing Team</h2></div>
<div class="dev1" style="width:100%;height:200px"><div style="float:left;height:200px;width:60%;font-family: Arial, Helvetica, sans-serif;  font-style: normal;font-size:17px">&nbsp;&nbsp;&nbsp;<p style="color:#1E90FF">AVINASH KUMAR SHARMA</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graduation:BCA,University of Allahabad<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CEO Apple Services Web developer group<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact-no:8576810694,753001772<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email-id:avinashs735@gmail.com<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook:avi.victory93@yahoo.com

</div><a class="image" href="#" style="float:right"><img alt="brand"  id="foot_image"src="images/home/avi.png" class="img-circle" style="border-radius:50%;width:100px;height:100px;"></a></div>

</div>
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
								<img alt="brand" src="admin/mobileimage/logo.png" width ="80px" height ="80px" class="img-circle" align="center">
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