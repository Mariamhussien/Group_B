<?php
/**
* Theme for display productsion
*/
?><!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
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

   <!-- <div style=' clear: both; text-align:left; position: relative; top:0px;'>
            <img src="<?php bloginfo('template_url');?>/images/logo.png" border="0" height="20" width="150">
    </div> -->

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
			                 
			                    <div class="col-lg-1">
			                      <img src="<?php bloginfo('template_url'); ?>/images/logo.png" id="logo">
			                    </div>
			                   <div class="menue">
			                   <ul id="drop-nav"> 
							  <li>
                                  <a href="index1.php">Home</a>
                             </li>
							  <li><a href="#">Women</a></li>
							  <li><a href="#">Man</a></li>
							  <li><a href="#">Kides</a>
			
							  </li>
							   <li><a href="basket.php">My Basket</a>
			
							  </li>
							</div>
							</ul>
			            </div>
			            <!-- /.navbar-collapse -->
			            <div class=" col-lg-3 bar">
			        
			                <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" id="facebook">
			                <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" id="facebook">
			                <img src="<?php bloginfo('template_url'); ?>/images/rss.png" id="facebook">
			            </div>
			      </div>
			        <!-- /.container -->
			  </nav>
    </header>
   
    <br>
    <br>
    <br>