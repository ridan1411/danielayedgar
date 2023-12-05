<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mi Boda | Novia y Novio </title>
	<link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=" " />
	<meta name="keywords" content="Boda Daniela y José Ramón" />
	<meta name="author" content="" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by 
		
	Website: 		http:///
	Email: 			info@
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-lg-9 col-xs-2 text-right menu-1">
					<ul>
						<li class=""><a href="index.php">Inicio</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header-galeria" class="fh5co-cover fh5co-cover-sm" role="banner">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Novia &amp; Novio </h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Galería -->
	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<span>Nuestros Recuerdos</span>
					<h2 class="d_title">Galería</h2>
					<p>Compartimos con gente especial una parte de nosotros.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">

					<?php  

						for($i=1; $i<=15; $i++){
							
							?>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/galeria/<?php echo $i?>.jpg); "> 
								<a target="_blank" href="images/galeria/<?php echo $i?>.jpg">
									<div class="case-studies-summary">
									
										<h2></h2>
									</div>
								</a>
							</li>	
							<?php

						}//for

					?>

					</ul>		
				</div>
			</div>
		</div>
	</div>



	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
		<div class="container">
            <div style="padding: 20px 100px; display: flex; flex-direction: column; align-items: center;">
                <img src="images\footer-logo.png" alt="" style="width: 100%;">
                <a href="https://lozania.com.mx/" target="_blank" style="color: #6e4e37ff; font-size: 14px;"><strong>Lozania Eventos
                    </strong></a>
            </div>
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                    </p><div class="container fotRid">
                        Designed by
                        <a style="color: #d39e00;" target="_blank" href="https://api.whatsapp.com/send?phone=523317025046&amp;text=Me%20gustar%C3%ADa%20tener%20un%20sitio%20web%2C%20vi%20un%20ejemplo%20en%20www.invitacionvirtual.com">
                            NopalliTech
                        </a>
                    </div>
                    <p></p>
                </div>
            </div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

