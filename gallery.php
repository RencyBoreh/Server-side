

<?php
include 'connect.php';
$drl = "http://localhost/hotel making/";define('DRL',$drl);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sagana Hotel Website | Gallery</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
							<p class="phone">Call us : <a href="#">+254716182100</a></p>
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
							<li class="active"><a href="gallery.php">Gallery</a></li>
							<li><a href="contact.php">Contact</a></li>
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
					<!----start-image-gallery----->


					<?php
					//linking to access content retrieved from the database
					$img = getgallerycontent($conn);
					//calling the associative array
					$all_images = $img['photos'];
					// var_dump($all_images);
					if(count($all_images) > 0){
						foreach($all_images as $photo){
					

					echo '<div class="gallerys">
					<div class="gallery-grids">
						<div class="gallery-grid">
						<div class="gallery_image"><img src="'.DRL.'images/'.$photo['image_photo'].'" alt=""></div>
							<h4>'.$photo['image_title'].'</h4>
							<p> '.$photo['image_desc'].'</p>
							</div>
							</div>';
					}
					

				}
				echo'</div>';
					 ?>
					 

					 
					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
				    <div class="clear"> </div>
				    <div class="projects-bottom-paination">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
						</ul>
					</div>
				</div>
					<!----start-image-gallery----->
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
			<p>SAGANA HOTEL,KENYA 2024></p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
	</body>
</html>



