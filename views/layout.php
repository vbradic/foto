<html lang='en'>
<head>
<title>DieFoto</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet"
	href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/smoothness/jquery-ui.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.0.3/jquery.cycle.all.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-basic.min.css">

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	rel="stylesheet">

<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
	type="text/css" rel="stylesheet" />

<link href='https://fonts.googleapis.com/css?family=Bangers'
	rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="app/css/header.css">
<link rel="stylesheet" type="text/css" href="app/css/Footer-white.css">
<link rel="stylesheet" type="text/css" href="app/css/fluid-gallery.css">
<link rel="stylesheet" type="text/css" href="app/css/gallery.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">

</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" id="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse out open"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li><a class="hvr-underline-from-center" href="http://localhost/foto/index.php?controller=home&action=home">Home</a></li>
					<li><a class="hvr-underline-from-center" href="http://localhost/foto/index.php?controller=gallery&action=all_galleries">Blog</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a class="hvr-underline-from-center" href="http://localhost/foto/index.php?controller=video&action=all_videos">Video</a></li>
					<li><a class="hvr-underline-from-center" href="#">Contact</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div class="row">
		<div class="col-xs-12">

			<div id="logo_img" class="div_image">
				<img class="img-responsive" src="app/imgs/studio85Logo.png">
			</div>

			<div id="show-case">
			<?php if($controller == 'home') { ?>
				<img class="img img_gallery img-responsive" src="app/imgs/slides/slide1.jpg">
				<img class="img img_gallery img-responsive" src="app/imgs/slides/slide2.jpg">
				<img class="img img_gallery img-responsive" src="app/imgs/slides/slide3.jpg">
				<img class="img img_gallery img-responsive" src="app/imgs/slides/slide4.jpg">
				<img class="img img_gallery img-responsive" src="app/imgs/slides/slide5.jpg">
  				
			<?php } else if ($controller == 'gallery') {?>
				<img class="img_gallery img-responsive"
					src="app/imgs/slides/slide3.jpg">

			<?php } else if ($controller == 'video') {?>
				<img class="img_gallery img-responsive"
					src="app/imgs/slides/slide4.jpg">
			<?php } ?>
			
			</div>
		</div>
	</div>


<?php require_once ('app/routes.php'); ?>

	<div class="row" style="margin-top: 10%;">
		<div class="col-xs-12">
			<p class="text-center" style="font-family: 'Fjalla One', sans-serif;">© 2018 Studio 85</p>
		</div>
	</div>

	<footer id="myFooter">
		<div class="footer-social">
			<a href="#" class="social-icons"><i class="fa fa-facebook"></i></a> <a
				href="#" class="social-icons"><i class="fa fa-instagram"></i></a> <a
				href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
		</div>

		<div class="container footer-nav">
			<ul>
				<li><a href="http://localhost/foto/index.php?controller=home&action=home">Home</a></li>
				<li><a href="http://localhost/foto/index.php?controller=gallery&action=all_galleries">Blog</a></li>
				<li><a href="#">Video</a></li>
				<li><a href="#">Contact</a></li>
			</ul>

		</div>

	</footer>

	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="app/scripts/header.js"></script>

	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>
    baguetteBox.run('.tz-gallery');
</script>



</body>
</html>