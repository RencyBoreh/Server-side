
<?php
include 'connect.php';

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Website | Gallery </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.php"><img src="images/logo2.png" title="logo" /></a>
						</div>
						<div class="contact-info">
							<p class="phone">Call us : <a href="#">+254716182160</a></p>
							<p class="gpa">Gpa : <a href="#">View map</a></p>
							
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!-------start-contatct------>
					<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
      			<div class="company_address">
				     	<h3>Hotel Information</h3>
						    	<p>515,</p>
						   		<p>30300,</p>
						   		<p>Nairobi, Kenya</p>
				   		<p>Phone:(254) 716500004</p>
				   		<p>Fax: (254) 7689057356</p>
				 	 	<p>Email: <span>sagana@.gmail.com</span></p>
				   		<p>Follow us on: <span>Facebook</span>, <span>Twitter</span></p>
						
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					<?php
					echo '<form method="post" action=" '.insertdata($conn).' ">
					<div>
						<span><label>FULL NAME:</label></span>
						<span><input name="userName" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>E-MAIL:</label></span>
						<span><input name="userEmail" type="text" class="textbox"></span>
					</div>
					<div>
						 <span><label>MOBILE NUMBER</label></span>
						<span><input name="userPhone" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>SUBJECT</label></span>
						<span><textarea name="userMsg"> </textarea></span>
					</div>
				   <div>
						   <span><input type="submit" value="Submit" name="Submit"></span>
				  </div>
				</form>';
				?>
					    

				    </div>
  				</div>				
			  </div>
			</div>
					<!-------start-contatct------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
				
				</div>
				
				<div class="box">
					 
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-tight">
			<p>SAGANA HOTEL,KENYA 2024 </p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->


		<?php
		

			

		
		//echo '<script> alert("request received successfully")</script>';

		?>
	</body>
</html>

