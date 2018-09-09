<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Medicare Lanka | Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</head>
	<body>
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="blog.php">blog</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
					<div class="contact-form">
						<h3>LOGIN</h3>
						<?php
							if (isset($_SESSION['userid'])) {
								echo "<form action='includes/logout.inc.php'>
									<button>LOG OUT</button>
								</form>";
							} else {
								echo "<form action='includes/login.inc.php' method='POST'>
									<input type='text' name='userid' placeholder='USER ID'>
									<input type='password' name='pwd' placeholder='PASSWORD'>
									<div class='button'><span><button type='submit'>LOGIN</button></span></div>
								</form>";
							}
						?>
					</div>
					</div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>SIGN UP</h3>
						  <div class="button"><span><a href="signup.php">Click Here</a></span></div>
				     </div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>				
					<div class="text list_1_of_2">
							<h3>STATUS</h3>
							<div class="footer-x">
							<div><span>
							<?php
								if (isset($_SESSION['userid'])) {
									echo "You are logged in as ".$_SESSION['userid'];
								} else {
									echo "You are not logged in !";
								}

							?>
							</span>
							</div>
							</div>
				    </div>
				</div>				
			</div>
		    </div>
		   </div>