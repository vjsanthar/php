<?php
require 'include/db_functions.php';
?>

<?php

if(isset($_POST['submit']))
{
	$result = insert($con, $_POST);
	if ($result == TRUE)
	{
	 echo "redirect"; 
	}
	else
	 {
	   echo "Error in inserting values";    
	 }
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>24-Hour Pearl Klinik </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> 99, King Street, Penang</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +04-262 7295</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@thepearlclinic.net</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					<li><a href="appointment.html"> Appointment or Enquiry</a> </li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-stethoscope" aria-hidden="true"></span>The Pearl Clinic </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html" >About Us</a></li>
								
								<li><a href="departments.html">Diabetic Care</a></li>
								<li><a href="gallery.html">Packages</a></li>
								<!--<li><a href="doctors.html">Doctors</a></li>
								    <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctors <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="dr-kanthan.html">Dr.Kanthan</a></li>
										<li class="divider"></li>
										<li><a href="icons.html">Dr.Icons</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>-->
								<li><a href="mail.html"  class="active">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
		<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="inner_sec_info_agileits_w3">
              <h2 class="heading-agileinfo">Contact US<span>Caring For Your Health – An Associate Of Klinik Mediviron.</span></h2>
				<div class="contact-form">
					     <form method="post" action="#">
							 <div class="left_form">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						     	<span><label>Fax</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" required=""></span>
						    </div>
					    </div>
					    <div class="right_form">
								<div>					    	
									<span><label>Message</label></span>
									<span><textarea name="Message" required=""> </textarea></span>
								</div>
							   <div>
									<span><input name="submit" type="submit" value="Submit" class="myButton"></span>
							  </div>
					    </div>
					    <div class="clearfix"></div>
						</form>
				  </div>
			</div>
		

		</div>
	</div>
		<!-- /map -->
			<div class="map_w3layouts_agile">
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.008581855092!2d100.3390534!3d5.4166409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21d783125d97252a!2sThe%20Pearl%20Clinic%20-%2024%20Hour%20Medical%20Clinic!5e0!3m2!1sen!2smy!4v1570871354459!5m2!1sen!2smy" style="border:0;" allowfullscreen=""></iframe>
			</div>
		<!-- //map -->

	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-3 footer_grid">
				<h3>About Us</h3>
				<p>“The Pearl” is a general practice clinic, established in 2009 and is located in the inner Georgetown area. It was designed with a modern perspective of healthcare in mind. 

				</p>
				
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Links</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="index.html" data-toggle="modal" data-target="#myModal">Home </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="about.html" data-toggle="modal" data-target="#myModal">About Us</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="departments.html" data-toggle="modal" data-target="#myModal">Departments </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="gallery.html" data-toggle="modal" data-target="#myModal">Packages</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="mail.html" data-toggle="modal" data-target="#myModal">Contact Us </a>
					</li>
				</ul>
			</div> 
			
			
			<div class="col-md-3 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>99, King Street, <span>Georgetown,</span> <span> Penang.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@thepearlclinic.net</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>04-2627295</li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid ">
				<h3>Sign up for our Newsletter</h3>
				<p>Get Started For Free</p>
				<div class="footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>© 2022 Pearl Clinic. All rights reserved | Design by <a href="http://www.esource-malaysia.com">eSource Software</a></p>
		<p align="center">
			<a href="https://www.facebook.com/thepearlclinic/"><img src="images/facebook.png" alt=" " ></a>
			<a href="https://twitter.com/99PearlClinic"><img src="images/twitter.png" alt=" " ></a>
			<a href="https://www.instagram.com/thepearlclinic99"><img src="images/instagram.png" alt=" " ></a>			
		</p>
	</div>
	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					New Clinic
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g7.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>