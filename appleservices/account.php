<?php
		include('connection.php');
		session_start();
		require 'item.php';
		


?>

<html >
<head>
   
    <title>Account|AWS </title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">

</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"> <img src="ph.png">+91 99 88 776655</a></li>
								<li><a href="#"><img src="msg.png"> applewebservices.com</a></li>
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
	
	
	</header><!--/header-->
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="iindex.php">Home</a></li>
				  <li class="active">My Order</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
			
			<form method="post">
				<h2><b>MY Order</b></h2>
				<a href="iindex.php" class="btn btn-default check_out" >BACK</a><br>
				<table class="table table-condensed">
					<tr class="cart_menu">
						<td>Order-id</td>
						<td>Product-id</td>
						<td>Prod-image</td>
						<td class="price">Price</td>
						<td class="quantity">Quantity </td>
						<td class="total">Total</td>
						<td></td>
					</tr>
			<?php 
			$cust_id=$_SESSION['id'];
			$q = "select * from tbl_order where cust_id='$cust_id'";
			//echo $q."<br>";
			$r2 = mysqli_query($con,"$q");
			
			
			
			while($row2 = mysqli_fetch_array($r2))
			{
				$qq ="select * from orderdetails where ordersid ='".$row2['id']."'";
				$rr = mysqli_query($con,"$qq");
				
				while($row = mysqli_fetch_array($rr))
				{
					$q3 ="select * from tbl_product where prod_id='".$row['prod_id']."'";
					$r3 = mysqli_query($con,"$q3");
					//echo $q3;
					$q4 = "select * from adddeatails where ordersid ='".$row2['id']."' ";
					$r4 = mysqli_query($con,"$q4");
					//echo $q4;
					while($row3 = mysqli_fetch_array($r3))
					{	
						$row4 = mysqli_fetch_array($r4);
						echo "<tr>
							<td>$row2[id]</td>
							<td>$row[prod_id]</td>
							<td><img src='admin/mobileimage/$row3[image]' width='70' height='100'></td>
							<td>Rs.$row[price]</td>
							<td>$row[quantity]</td>
							<td>Rs.$row[price]</td>
							<td>
									<a href='order_delete.php?prod_id=$row[prod_id]&ordersid=$row2[id]' style='color:red'><img src='images/remove.png' width='40px' height='35px'></a>
							</td>
						</tr><br>
						<tr>
							<td style='color:green'> 
								Order-Status:-$row4[order_status]
							</td>
							
						</tr>";	
						
					}
				}
			}
			?>
						
				</table>
				</form>
			</div>
		</div>
		
		
	</section> <!--/#cart_items-->
	
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
								<img alt="brand" src="admin/mobileimage/logo.png" width="80px" height="80px" class="img-circle" align="center">
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
				</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>