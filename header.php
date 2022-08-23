<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><!--<![endif]-->

<html <?php language_attributes(); ?> class="no-js">
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="<?php bloginfo('charset'); ?>">
	 <title>
	 <?php 

	 		bloginfo('name');
	 		wp_title('&raquo;',true,'left');

	  ?>
	 </title> 
	<meta name="description" content="">  
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">





<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
 <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>



   <!-- script
   ================================================== -->   
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>


<!--  
	<script src="js/pace.min.js"></script>
-->
	<!-- Here Under Call style.css -->
	<link rel="stylesheet" href=" <?php bloginfo('stylesheet_url' ); ?>">
	<?php 
		wp_head();
	 ?>
</head>

<body id="top" <?php body_class(); ?>>

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <!-- <a href="index.html">KARDS</a> -->Shahidul
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll"  href="#services" title="">Services</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
									
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->