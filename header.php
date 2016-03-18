<?php
/**
* Theme for display productsion
*/
?><!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title("|", true, 'right'); ?></title>
     <link rel="icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/grid.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/camera.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.css"/>
    <script src="js/js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
    

  

    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylsheet_url');?>/">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>/">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="contanier">	
		<header id="header">
		   <!-- Navigation -->
		
			      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			        <div class="container">
			            <!-- Brand and toggle get grouped for better mobile display -->
			            <div class="navbar-header brand">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                </button>
			            </div>
			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			                 <ul id="drop-nav">
			                    <li>
			                      <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" id="logo">
			                    </li>

			                   
							  <li><a class="active" href="#">Home</a></li>
							  <li><a href="<?php echo get_permalink(717)?>">Women</a>
							    
							  </li>
							  <li><a href="<?php echo get_permalink(715)?>">Men</a>
							    
							  </li>
							  <li><a href="<?php echo get_permalink(720)?>">Kides</a>
							 
							  </li>
							</ul>
			            </div>
			            <!-- /.navbar-collapse -->
			            <div class=" col-lg-12 bar">
			        
			                <img src="<?php bloginfo('template_url'); ?>/images/facebook.jpg" id="facebook">
			                <img src="<?php bloginfo('template_url'); ?>/images/twitter.jpg" id="facebook">
			                <img src="<?php bloginfo('template_url'); ?>/images/rss.jpg" id="facebook">
			                 <a href="http://localhost/round5-wordpress/wordpress/wp-content/themes/hospitals/bascket.php"><img class="pull left" src="<?php bloginfo('template_url'); ?>/images/icon1.jpg" id="facebook">
			                  </a>
			            </div>
			      </div>
			        <!-- /.container -->
			  </nav>
    </header>
   
    <br>
    <br>
    <br>