<?php
		include('connection.php');
		session_start();
		require 'item.php';

	
//save new order
date_default_timezone_set('Asia/Calcutta');
$custid=$_SESSION['id'];
mysqli_query($con,'insert into tbl_order(name,date,cust_id)values("New order","'.date("Y/m/d h:i:s").'",'.$custid.')');
$ordersid = mysqli_insert_id($con);
	

//save order details for new order
	
	$fname = $_POST['txtFName'];
	$lname = $_POST['txtLName'];

	$zipcode = $_POST['txtZip'];
	$country = $_POST['txtCountry'];
	$state= $_POST['txtState'];
	$city = $_POST['txtCity'];
	$phoneno = $_POST['txtPhno'];
	$pfname = $_POST['PtxtFName'];
	$plname = $_POST['PtxtLName'];
	
	$pzipcode = $_POST['PtxtZip'];
	$pcountry = $_POST['PtxtCountry'];
	$pstate= $_POST['PtxtState'];
	$pcity = $_POST['PtxtCity'];
	$pphoneno = $_POST['PtxtPhno'];	
	
	$query = "insert into adddeatails(ordersid,fname,lname,address,zipcode,country,state,city,phoneno,pfname,plname,pzipcode,pcountry,pstate,pcity,pphoneno,order_status) values ('$ordersid','$fname','$lname','$zipcode','$country','$state','$city','$phoneno','$pfname','$plname','$pzipcode','$pcountry','$pstate','$pcity','$pphoneno','NEW')";
	$res1=mysqli_query($con,$query);

	
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0;$i<count($cart);$i++){
		mysqli_query($con,'insert into orderdetails(prod_id,ordersid,price,quantity) values ('.$cart[$i]->prod_id.','.$ordersid.','.$cart[$i]->price.','.$cart[$i]->quantity.')');
	}	

//Clear all product in cart
unset($_SESSION['cart']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Order</title>
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
	
	
	</header><!--/header--><br><br><br><br>
<table border="1" align="center" width="716">
	<tr>
    	<td>
        	<center><h4><font color="#0066FF">Your Order is submitted successfully.You will receive Order confirmation within short period of time.</font></h4></center>
        </td>
    </tr>
	<tr>
		<center><h4>Your Order Number Is.<?php echo "$ordersid";?><font color="#0066FF"></font></h4></center>
	</tr>
</table>
<br><br><br>	
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
	
</body>
</html>