<?php
		include('connection.php');
		session_start();
	
?>

<html >
<head>
    
    <title>Conatct-US|AWS </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
	<style>
#mainbox{
		width:350px;
		height:250px;
		position:absolute;
		overflow:hidden;
		top:48.9%;
		left:10%
	}
#imgbox{
		width:300%;
		position:relative;
		left:0;
		animation:slidemove 30s infinite;
		}
#imgbox img{
		width:33.33%;
		float:left;
		}
@-webkit-keyframes slidemove{
		0%{left:0;}
		25%{left:-100%;}
		50%{left:-200%;}
		75%{left:-100%;}
		100%{left:0;}
		}
#bg{
	height:100%;
	width:100%;
	background:url('bg.jpg')
	}
#blacklayer{}
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
.showSlide {  
                display: none  
            }  
                .showSlide img {  
                    width: 500px;  
                }  
            .slidercontainer {  
                max-width: 1000px;  
                position: relative;  
                margin: auto;  
            }  
            .left, .right {  
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
            
            .content {  
                color: #eff5d4;  
                font-size: 30px;  
                padding: 8px 12px;  
                position: absolute;  
                top: 10px;  
                width: 100%;  
                text-align: center;  
            }  
            .active {  
                background-color: white;  
            }  
            /* Fading animation */  
            .fade {  
                -webkit-animation-name: fade;  
                -webkit-animation-duration: 1.5s;  
                animation-name: fade;  
                animation-duration: 1.5s;  
            }  
            @-webkit-keyframes fade {  
                from {  
                    opacity: .4  
                }  
                to {  
                    opacity: 1  
                }  
            }  
      
            @keyframes fade {  
                from {  
                    opacity: .4  
                }  
                to {  
                    opacity: 1  
                }  
            } 

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
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Feedback</h2>
					<?php 
							
							if(isset($_POST['btnSubmit2']))
							{
								
								$FName=$_POST['FName'];
								$FEmail=$_POST['FEmail'];
								$FSubject=$_POST['FSubject'];
								$FMessage=$_POST['FMessage'];
								
								if(empty($FName)||empty($FEmail)||empty($FSubject)||empty($FMessage))
								{
									echo "Enter the All Fields.";
								}
								else
								{
									mysqli_query($con,"insert into tbl_feedback (name,email_id,subject,desc_feedback) values ('$FName','$FEmail','$FSubject','$FMessage')");
									//header("location:feedback_detail.php"); 
									echo "Feedback Inserted.";
								}
							}
						?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="FName" id="FName" class="form-control" required="required" placeholder="Name" value="<?php if (isset($FName)) echo $FName; ?>">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="FEmail" id="FEmail" class="form-control" required="required" placeholder="Email" value="<?php if (isset($FEmail)) echo $FEmail; ?>">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="FSubject" id="FSubject" class="form-control" required="required" placeholder="Subject" value="<?php if (isset($FSubject)) echo $FSubject; ?>">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="FMessage" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here" value="<?php if (isset($FMessage)) echo $FMessage; ?>"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="btnSubmit2" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Apple Web Services</p>
							<p>P-228,Vellore ,Tamil Nadu</p>
							<p>INDIA</p>
							<p>Mobile: +91-8576810694</p>
							<p>Email: avinashs735@gmail.com</p>
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	
	
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