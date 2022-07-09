<?php 
session_start();
include 'connection.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Elite Match a Matrimonial Category Bootstrap Responsive Website Template  | Login :: W3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<!--//fonts-->

<style>

.card{

background-color:white;
box-shadow: 5px 5px 5px 5px ;

}

</style>

</head>
<body>
<!--banner start here-->
<div class="baner-w3ls inner-banner-agileits" id="home">
	<div class="container">
		<!-- header -->
                 <div class="header-inner">
					  <!-- <h1 class="logo">
						<a href="index.html">Elite<span>Match</span></a></h1> -->
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								
							</div>
							<div class="clearfix"> </div>	
						</nav>
						<div class="header-right-w3ls">
						<a href="login.php">Log In</a>
							<a href="register.php">Register</a>
						</div>
						<div class="clearfix"></div>
				</div>
</div>			
</div>
<!--//home-->
<!--banner end here-->
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>&#187;</span></li>
									
				<li>Login</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Login Now</h3>
			</div>
	<div class="col-md-8 login-form-w3-agile card" style="margin-left:150px;">
			 <form action="#" method="post">
				<div class="w3_form_body_grid">
					<span>Name</span>
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Password</span>
					<input type="password" name="pass" placeholder="Password" required="">
				</div>
				<input type="submit" name="submit"  value="Sign In">
			</form>
		</div>
		
	</div>
</div>

<?php
	if(isset($_POST['submit']))
	{
        $id=$_POST['email'];
        $psw=$_POST['pass'];
		echo $id;
		echo $psw;
        $q="select count(*) from login where uname='$id'";
		echo $q;

    $s= mysqli_query($con, $q);
    $r= mysqli_fetch_array($s);
	echo $r[0];
    if($r[0]==0)    
    {
        echo '<script>alert("Username doesnt exist")</script>';
    }
    else
    {
        $_SESSION['email']=$id;    
        $q="select * from login where uname='$id'";
        $s= mysqli_query($con, $q);
        $r= mysqli_fetch_array($s);
        if($r[3]==$psw)  
        {
            if($r[5]=="1")
            { 
                if($r[4]=="Admin")  
                {
                    echo '<script>location.href="adminhome.php"</script>';
                }
                else if($r[4]=="Customer")
                {
                    echo '<script>location.href="customerhome.php"</script>';
                } 
            }
            else
            {
                echo '<script>alert("Your account is not valid")</script>';
            }
        }
        else
        {
            echo '<script>alert("Incorrect password")</script>';
        }
    }
}
?>
<!--login-inner-->
<!-- footer -->
<div class="w3l_footer">
		<div class="container">
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
							<h4>Location:</h4>
							<p>Matrimonium Elite, Ipswich,<br> Foxhall Road, UK</p>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
							<h4>Contact us:</h4>
							<p><span>Phone : </span>505-222-5432</p>
							<p><span>Email : </span><a href="mailto:info@example.com">info@example.com</a></p>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
							<h4>Opening hours:</h4>
							<p>Working days (8am-9pm)</p>
							<p>Sundays (9am-1pm)</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- footer-button-info -->
				<div class="footer-middle-agileinfo">
					<div class="footer-button">
					<div class="button-top-w3layouts">
						<div class="logo-icons-w3ls">
							<i class="fa fa-heart heart1" aria-hidden="true"></i>
							<i class="fa fa-heart-o heart2" aria-hidden="true"></i>
						</div>
					</div>
						<div class="sim-button button12"><a href="contact.html">Contact Us</a></div>
						<h2>We’re Committed to Service Excellence.</h2>
					</div>
				</div>
				<!-- footer-button-info -->
		</div>
</div>

<div class="botttom-nav-agileits">
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="matches.html">Matches</a></li>
		<li><a href="contact.html">Contact</a></li>
	</ul>
</div>
<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p>© 2017 Elite Match. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="agileits-social">
					<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--/footer -->

<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>



<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
	<!-- //for-Clients -->
	<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>