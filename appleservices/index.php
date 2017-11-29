<?php
	include('connection.php');
	session_start();
	$_SESSION['id']="";
?>
<html >
<head>
    
    <title>Login|AWS</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

   
    </head><!--/head-->

<body >
	<header id="header" ><!--header-->
		<div class="header_top" ><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><img src="ph.png"> +91 8576810694</a></li>
								<li><a href="#"><img src="msg.png">avinashs735@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 ">
						<div class="social-icons pull-right" >
							<ul class="nav nav-pills">
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
			<div class="container ">
				<div class="row " >
					<div class="col-sm-4 " >
					<div >
							<a href="index.php"><img src="admin/mobileimage/ap2.jpg"  width ="500px" height="90px" alt="" /></a>
					</div>
					
					</div>
					
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
								<li><a href="admin/adminindex.php">Administrator</a></li>
								<li><a href="#">Account</a></li>
								<li>
								<?php
										
										if ($_SESSION['id'] == "")
										{
											echo "<a href='index.php'<i class='fa fa-crosshairs'></i>Checkout</a>";
										}
										else
										{
											echo "<a href='checkout.php'><i class='fa fa-crosshairs'></i>Checkout</a>";
										}
										
									?>
								</li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							</ul>
					</div>
				</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<section id="form" ><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2><b>Login to Your Account</b></h2>
						<?php
								
								if(isset($_POST['btn1']))
								{
									$Email = addslashes($_REQUEST['txtEmail']);
									$password = addslashes($_REQUEST['txtPassword']);
									$email_check = "/^([A-Za-z0-9_\-\.])+\@([A-Za-z_\-\.])+\.([A-Za-z]{2,4})$/";
									$query = "select * from tbl_register where email_add='$Email' and password='$password'";
									if($c =	 mysqli_query($con,$query))
									{
										if(mysqli_num_rows($c)>0)
										{
											$res =  mysqli_fetch_array($c);
											if($res['email_add']==$Email && $res['password']==$password)
											{
												$_SESSION['email_add']=$Email;
												$_SESSION['id']=$res['cust_id'];
												header("Location:iindex.php");
											}
											
											else
											{
													$msg = "Login fail,Try again";
													echo $msg;
											}
										}
										else
										{
											$msg = "Login fail";
											echo $msg;
										}
									}
									else
									{
										$msg="Login fail error";
									}
								}
								?>
						<form action="" method="post" id="login" name="login">
							
							<input type="email" name="txtEmail" placeholder="Email Address" />
							<input type="password" name="txtPassword" placeholder="Password" />
							
							<button type="submit" name="btn1" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1"">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
						<h2><b>New User Signup!</b></h2>
						<?php 
							
							if(isset($_POST['btnSubmit']))
							{
								
								$FName=$_POST['txtFName'];
								$LName=$_POST['txtLName'];
								$UName=$_POST['txtUName'];
								$Email=$_POST['txtEmail'];
								$Gender=$_POST['selGender'];
								$Country=$_POST['txtCountry'];
								$State=$_POST['txtState'];
								$City=$_POST['txtCity'];
								$ZipCode=$_POST['txtZipCode'];
								$Password=$_POST['txtPassword'];
								$ConfirmPassword=$_POST['txtConfirmPassword'];
								$PhoneNo=$_POST['txtPhoneNo'];
								$email_check = "/^([A-Za-z0-9_\-\.])+\@([A-Za-z_\-\.])+\.([A-Za-z]{2,4})$/";
								
								
								$user = addslashes($_REQUEST['txtUName']);
									
									$query = "select * from tbl_register where user_name='$UName'";
									
									
									
								
								
								if(empty($FName)||empty($LName)||empty($UName)||empty($Email)||empty($Gender)||empty($Country)||empty($State)||empty($City)||empty($ZipCode)||empty($Password)||empty($ConfirmPassword)||empty($PhoneNo))
								{
									echo "Enter the All Fields.";
								}
								else
								if(!preg_match($email_check,$Email))
								
								{ echo("Incorrect email address!"); } 
								
								else
								if($Password!=$ConfirmPassword)
								{
								echo"Sorry ! the password did not match.Retry..";
								}
								else
									
								{
									mysqli_query($con,"insert into tbl_register (first_name,last_name,user_name,email_add,gender,country,state,city,zip_code,password,confirm_password,phone_no) values ('$FName','$LName','$UName','$Email','$Gender','$Country','$State','$City','$ZipCode','$Password','$ConfirmPassword','$PhoneNo')");
									//header("location:register_detail.php");
									echo "Registered Successfully";
								}
							}
						?>
						<form action=""  method="post" id="reg" name="reg">
						<input type="text" placeholder="First Name" name="txtFName" id="FName" value=""/>
							<input type="text" placeholder="Last Name" name="txtLName" id="LName" value=""/>
							<tr><td><input type="text" placeholder="User Name" name="txtUName" id="UName" value=""/></td></tr>
							<tr><td><input type="email" placeholder="Email Address" name="txtEmail" id="Email" value=""/></td></tr><tr>
							<td><select name="selGender" id="Gender" value="">
								<option value="-1">Gender</option>
								<option>Male</option>
								<option>Female</option>
							</select>
							</td></tr>
							<tr>
							<td><input type="text" placeholder="Country" name="txtCountry" id="Country" value=""/></td></tr><tr>
								<td><input type="text" name="txtState" id="State" placeholder="State" value=""></td>
								<td><input type="text" name="txtCity" id="City" placeholder="City"value=""></td></tr>
							<tr>
							<td><input type="text" placeholder="Zip / Postal Code" name="txtZipCode" id="ZipCode" value=""/></td></tr>
							<tr><td><input type="password" placeholder="Password" name="txtPassword" id="Password" value=""/></td></tr>
							<tr><td><input type="password" placeholder="Confirm Password" name="txtConfirmPassword" id="ConfirmPassword" value=""/></td></tr>
							
							<tr><td><input type="text" placeholder="PhoneNo" name="txtPhoneNo" id="PhoneNo" maxlength="10" value=""/></td></tr>
							<tr><td><button type="submit" name="btnSubmit" class="btn btn-default">Signup</button></td></tr>
						
						</form>
					</div><!--/sign up form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->
	
	
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