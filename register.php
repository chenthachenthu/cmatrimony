<?php //
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
<title>Elite Match a Matrimonial Category Bootstrap Responsive Website Template  | Register :: W3layouts</title>
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
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<!--//fonts-->
<style>


.form-control{

	background-color:white;
	align-content: center;
	color: blue !important;
	
}

.container{

	margin:auto;
}
.form-group
{
	margin-left:28%;
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
								<!-- <ul class="nav navbar-nav navbar-right">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="matches.html">Matches</a></li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="codes.html">Short Codes</a></li>
											<li><a href="icons.html">Icons</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul> -->
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
									
				<li>Register</li>
				</ul>
		</div>
	</div>
</div>
  <div class="container">
  <form action="#" method="post" class="p-3 shadow" style="margin-top:30px;" enctype="multipart/form-data">
              <center><h1 style="color:blueviolet;font-family:'Times New Roman', Times, serif;">Register</h1></center>
                   <div class="row">
				 	<div class="form-group col-sm-6" style="margin-top:20px">
                        <select name="profor" class="form-control ">
						<option value="null">Select</option>
						<option value="Myself">Myself</option>   
						<option value="Son">Son</option>   
						<option value="Daughter">Daughter</option>   
						<option value="Brother">Brother</option>   
						<option value="Sister">Sister</option> 
                        </select>
                    </div>
					</div>
					<div class="row">
                    <div class="form-group col-sm-6" style="margin-top:20px">
                    <input type="text" name="name" placeholder="Name" class="form-control" required="">
                    </div>
					</div>
                        
                    <div style="margin-top:20px;" class="form-group col-sm-6">
                    <input type="radio" name="gender"  value="Male">Male
                    <input type="radio" name="gender"  value="Female" checked>Female
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6" style="margin-top:20px">
                    <input type="date" class="form-control" name="dob"  required="">
                    </div>
					</div>

					<div class="row">
                    <div class="form-group col-sm-6" style="margin-top:20px">
					<select name="religion"  style="width:250px;" class="form-control">
						<option value="Hindu">Hindu</option>  
						<option value="Muslim">Muslim</option>   
						<option value="Christian">Christian</option>   
						<option value="Sikh">Sikh</option>   
						<option value="Jain">Jain</option>   
						<option value="Buddhist">Buddhist</option>
						<option value="No Religious Belief">No Religious Belief</option>   						
					</select>
                    </div>
					</div>

					<div class="row">
                     <div class="form-group col-sm-6" style="margin-top:20px" >
					 <input type="text" name="contact" required="" class="form-control" pattern="[6789][0-9]{9}" max="10" placeholder="Phone" />
                    </div>
					</div> 

					<div class="row">
                    <div class="form-group col-sm-6" style="margin-top:20px" class="form-control">
					<input type="text" name="addr" placeholder="Address" class="form-control" required="">
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<input type="file" name="file" class="form-control" /><br>
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<input type="text" name="caste" placeholder="Caste" class="form-control" required="">
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<select name="mstatus"  style="width:250px;" class="form-control">
						<option value="Single">Single</option>  
						<option value="Divorced">Divorced</option>   						
					</select>
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<input type="text" name="height" placeholder="Height(in cm)" required="" class="form-control">
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<select name="fstatus"  style="width:250px;" class="form-control">
						<option value="Nuclear">Nuclear</option>  
						<option value="Joint">Joint</option>   						
					</select>
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<?php
						$q="select * from qualification";
						$s= mysqli_query($con, $q);
						$res = 00;
						
					echo"
					<select name='education'  style='width:250px;' class='form-control'>";
					while ($r= mysqli_fetch_array($s))
						{
					echo"<option value=$r[qualification]>$r[qualification]</option>";     						
					}
					echo"</select>";
					?>
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<select name="empin"  style="width:250px;" class="form-control">
						<option value="Government">Government</option>  
						<option value="Private">Private</option>
						<option value="Buisness">Buisness</option>   						
					</select>
                    </div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6" style="margin-top:20px">
					<input type="text" name="occupation" placeholder="Job Description" required="" class="form-control">
                    </div>
					</div>
					<div class="row">
                    <div class="form-group col-sm-6" style="margin-top:20px">
					<input type="email" name="email" placeholder="Email"  required="" class="form-control">
                    </div>    
					</div>
					<div class="row">
                    <div class="form-group col-sm-6" style="margin-top:20px">
                        <input type="password" name="password"  placeholder="password" required class="form-control">
                    </div>
					</div>
                        <input type="submit" name="submit" class="btn btn-success" value="continue" style="margin-top:20px;margin-left:45%;background-color:red;"><br><br>
                        
                </form>
			
</div>
<?php  

if (isset($_POST['submit'])){
  
  $profor=$_POST['profor'];
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
 
   $religion=$_POST['religion'];
   $contact=$_POST['contact'];
   $addr=$_POST['addr'];
   $email=$_POST['email'];

   $caste=$_POST['caste'];
   $mstatus=$_POST['mstatus'];
   $height=$_POST['height'];
   $fstatus=$_POST['fstatus'];
   $education=$_POST['education'];

   $empin=$_POST['empin'];
   $occupation=$_POST['occupation'];

   $password=$_POST['password'];
   $folder='images/';
    $file=$folder.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'],$file);
   
   $qry="select * from tbllogin where lcase(uname)='$email'";
   $res=mysqli_query($con,$qry);
   $row=mysqli_num_rows($res);
	echo $row;
   if($row[0]==0)
   {
    
       $qry="insert into customer (`name`,`email`,`phone`,`address`,`profor`,`gender`,`religion`,`dob`,`file`,`caste`,`martialstatus`,`height`,`familytype`,`education`,`employedin`,`occupation`) values('$name','$email',' $contact','$addr','$profor','$gender','$religion','$dob','$file','$caste','$mstatus','$height','$fstatus','$education','$empin','$occupation')";
        $res=mysqli_query($con,$qry); 
        if($res)
        {
            $qry="insert into login (uid,uname,password,utype,status) values((select max(cid)from customer),'$email','$password','Customer','1')";
			echo $qry;
			$res=mysqli_query($con,$qry); 
       if($res)
       {
           echo '<script>alert(" Registration successfull");</script>';
            echo '<script>location.href="register.php"</script>';
       }
       else {
                        echo '<script>alert(" Sorry some error occured");</script>';
           
                    }
                    
                }
        else{
      
       echo '<script>alert(" Registration failed");</script>';
        
}
            }
            else{
      
       echo '<script>alert(" User already registered ....");</script>';
        
}
   }
 
?>

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
<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	

</body>
</html>