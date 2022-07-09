<?php 
include 'connection.php';
session_start();
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
                            <ul class="nav navbar-nav navbar-right" >
									<li><a href="customerhome.php" class="active">Home</a></li>
									<li><a href="profile.php">Profile</a></li>
									<li><a href="addlocation.php">Update Location</a></li>
									<li><a href="prefer.php">Preferences</a></li>
									<li><a href="plans.php">Plans</a></li>
									<?php
									$email=$_SESSION['email'];
									$qry="select * from premiumbook where cid='$email' AND SYSDATE() BETWEEN `fromdate` AND `expdate`";
									$ex= mysqli_query($con, $qry);
									$row= mysqli_num_rows($ex);
									if($row>0){
									echo "
									<li><a href='chatlist.php'>Chatlist</a></li>
									";
									}
									?>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">View<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="viewedyou.php">viewed you</a></li>
											<li><a href="viewedbyyou.php">viewed by you</a></li>
											<li><a href="shlyou.php">Shortlisted you</a></li>
											<li><a href="shlbyyou.php">shortlisted by you</a></li>
											<li><a href="interest.php">Interested in you</a></li>
											<li><a href="interestbyyou.php">Interested by you</a></li>
											<li><a href="nearbyyou.php">Nearby you</a></li>
											<li><a href="gamematch.php">Game Match</a></li>
										</ul> 
									</li>
									<li><a href="help.php">Help</a></li>
									<li><a href="game.php">Game</a></li>
									<li><a href="index.php">Logout</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>	
						</nav>
						<!-- <div class="header-right-w3ls">
						<a href="login.php">Log In</a>
							<a href="register.php">Register</a>
						</div>
						<div class="clearfix"></div> -->
				</div>
</div>			
</div>
<!--//home-->

