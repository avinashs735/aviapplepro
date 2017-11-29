﻿<?php
		include('connection.php');
		session_start();
		require 'item.php';

?>

<html >
<head>
   
    <title>Checkout|AWS</title>
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
								<li><a href="#"> <img src="ph.png">+91-8576810694</a></li>
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
											echo "<a href='login.php'>Account</a>";
										}
										else
										{
											echo "<a href='account.php'>Account</a>";
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
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
			<?php 
			
			if(isset($_GET['prod_id']) && !isset($_POST['update']))
			{
				$result=mysqli_query($con,'select * from tbl_product where prod_id ='.$_GET['prod_id']);
				$tbl_product=mysqli_fetch_object($result);
				$item = new Item();
				$item ->prod_id=$tbl_product->prod_id;
				$item ->image=$tbl_product->image;
				$item ->prod_name=$tbl_product->prod_name;
				$item ->price=$tbl_product->price;
				$item ->quantity=1;
				//check product is existing in cart
				$index = -1;
				$cart = unserialize(serialize($_SESSION['cart']));
				for($i=0;$i<count($cart);$i++)
					if($cart[$i]->prod_id==$_GET['prod_id'])
					{
						$index = $i;
						break;
					}
				if($index == -1)
					$_SESSION['cart'][] = $item;
				else
				{
					$cart[$index]->quantity++;
					$_SESSION['cart'] = $cart;
				}
				
			}
			//delete product in cart
			if(isset($_GET['index']) && !isset($_POST['update']))
			{
				$cart = unserialize(serialize($_SESSION['cart']));
				unset($cart[$_GET['index']]);
				$cart = array_values($cart);
				$_SESSION['cart']=$cart;
			}
			//updating quantity in cart
			if(isset($_POST['update']))
			{
				$arrQuantity = $_POST['quantity'];
				//check validate quantity
				$valid = 1;
				for($i=0;$i<count($arrQuantity);$i++)
					if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] <1 )
					{
						$valid = 0;
						break;
					}
					if($valid == 1)
					{
						$cart = unserialize(serialize($_SESSION['cart']));
						for($i=0;$i<count($cart);$i++)
						{
							$cart[$i]->quantity=$arrQuantity[$i];
						}
						$_SESSION['cart']=$cart;
					}
				else
			
				$error = 'Quantity is invalid';
			
			}
			?>
			<?php echo isset($error) ? $error:''; ?>
				<form method="post">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>ID </td>
							<td class="image">Item</td>
							<td>Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity </td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<?php
					$cart = unserialize(serialize($_SESSION['cart']));
					$s = 0;
					$index = -1;
					for($i=0;$i<count($cart);$i++)
					{
						$s +=$cart[$i]->price * $cart[$i]->quantity;
						$index = $i;
						?>
						<tr>
							<td><?php echo $cart[$i]->prod_id; ?></td>
							<td><img src="admin/mobileimage/<?php echo $cart[$i]->image; ?>" alt="" title="" width="70" height="100" border="0" class="cart_thumb" /></td>
							<td><?php echo $cart[$i]->prod_name; ?></td>
							<td>Rs.<?php echo $cart[$i]->price; ?></td>
							<td><?php echo $cart[$i]->quantity; ?></td>
							<td class="cart_total_price">Rs.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
							             
						</tr>
					<?php	
						$index++;
					}
					?>
					<tr>
						<td colspan="5" align="right" class="cart_total_price">Total:-</td>
						<td class="cart_total_price">Rs.<?php echo $s; ?></td>
					</tr>
					<tr>
						<td>
							<a href="cart.php" class="btn btn-default check_out">Back to cart</a>
						</td>
						
					</tr>
						
				</table>
				</form>
			</div>
		</div>
		<div class="container">
			<div class="shopper-informations">
				<div class="row">
				<form name="order" method="post" action="order.php" >
					<div class="col-sm-3">
						
					</div>
					<div class="col-sm-5 clearfix">
					<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
							<?php
								include "connection.php";
								$custid=$_SESSION['id'];
								
								$query="select * from tbl_register where cust_id='$custid'";
								$res=mysqli_query($con,$query);
								$row=mysqli_fetch_array($res);
			
							?>								
									
									<input required type="text" name="txtFName" value="<?php echo $row['first_name']?>" id="txtFName" placeholder="First Name *" onkeyup="copyto2(this.id);"/>
									<input required type="text" name="txtLName" value="<?php echo $row['last_name']?>" id="txtLName" placeholder="Last Name *" onkeyup="copyto2(this.id);">
									
									<input required type="text" name="txtZip" value="<?php echo $row['zip_code']?>" id="txtZip" placeholder="Zip / Postal Code *" onkeyup="copyto2(this.id);">	
									<input required type="text" name="txtCountry" value="<?php  echo $row['country']; ?>" id="txtCountry" placeholder="Country *" onkeyup="copyto2(this.id);"/>	
									<input required type="text" name="txtState" value="<?php  echo $row['state']; ?>" id="txtState" placeholder="State *" onkeyup="copyto2(this.id);"/>
									<input required type="text" name="txtCity" value="<?php  echo $row['city']; ?>" id="txtCity" placeholder="City *" onkeyup="copyto2(this.id);"/>
									<input required type="text" name="txtPhno" maxlength="10" value="<?php echo $row['phone_no']?>" id="txtPhno" placeholder="Mobile Phone" onkeyup="copyto2(this.id);">
							</div>
							<div class="form-one">
							<div class="bill-to1"><input type="checkbox" name="same" id="same" onclick="copyall()" />
                            Same<p>Shipping Address</p></div>
									
									<input required type="text" name="PtxtFName" value="<?php echo $row['first_name']?>" id="PtxtFName" placeholder="First Name *"/>
									<input required type="text" name="PtxtLName" value="<?php echo $row['last_name']?>" id="PtxtLName" placeholder="Last Name *">
									
									<input required type="text" name="PtxtZip" value="<?php echo $row['zip_code']?>" id="PtxtZip" placeholder="Zip / Postal Code *">	
									<input required type="text" name="PtxtCountry" value="<?php  echo $row['country']; ?>" id="PtxtCountry" placeholder="Country *"/>	
									<input required type="text" name="PtxtState" value="<?php  echo $row['state']; ?>" id="PtxtState" placeholder="State *"/>
									<input required type="text" name="PtxtCity" value="<?php  echo $row['city']; ?>" id="PtxtCity" placeholder="City *"/>
									<input required type="text" name="PtxtPhno" maxlength="10" value="<?php echo $row['phone_no']?>" id="PtxtPhno" placeholder="Mobile Phone">
							
							</div>
						</div>
					</div>
					<div>
						<span>
							<a href="order.php"><input type="submit" name="btnSave"  style="margin-right: 392px;" class="btn btn-primary pull-right"  value="Buynow" /></a>
							<br><br>
						</span>
					</div>					
				</form>
				</div>
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
					Apple web Services is indias no. 1 website to get updated with latest gadgets from i- phone</p>				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
		
	

  
</body>
</html>