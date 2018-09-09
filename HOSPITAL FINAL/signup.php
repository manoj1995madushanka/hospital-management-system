<?php
	include 'header.php';
?>
		</div>
		<div class="clear"> </div>
			<div class="wrap">
		   	<div class="contact">
		   	<div class="section group">	
				  <div class="contact-form">
				  	</br><span><h1>SIGN UP</h1></span>
					    <form action="includes/signup.inc.php" method="POST">
					    	<div>
						    	<span><label>USER ID</label></span>
						    	<span><input type="text" name="userid"></span>
						    </div>
						    <div>
						    	<span><label>USER TYPE</label></span>
						    	<span><select id = "user_type" name="usertype">
									<option name="doctor">DOCTOR</option>
									<option name="patient">PATIENT</option>
									<option name="admin">ADMIN</option>
								</select></span>
						    </div>
						    <div>
						     	<span><label>FIRST NAME</label></span>
						    	<span><input type="text" name="first"></span>
						    </div>
						    <div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input type="password" name="pwd"></span>
						    </div>
							<div>
						   		<span><button type="submit">SIGN UP</button></span>
							</div>
					    </form>
			      </div>
			</div>
			</div>
			</div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare Lanka | Design By Kaeshavan</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

