<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="<?php bloginfo('template_directory');?>/library/img/logo.png" rel="icon" type="image/png" >

		<!-- Le Font Awesome!!! -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->
	<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
		<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
	
		<!-- respond.js -->
	<!--[if lt IE 9]>
	          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->	
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="" <?php body_class(); ?>>
			
	<!--<div class="header-contact">
		<div class="container">
			<ul>
				<li class="pull-left"><a target="_blank" href="https://www.google.com/maps/place/2000+N+Village+Ave+%23306,+Rockville+Centre,+NY+11570/@40.6867455,-73.6340522,17z/data=!3m1!4b1!4m2!3m1!1s0x89c27cc0eed2990b:0x822483e5c946c867">Rockville, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></li>
				<li class="pull-right"><a target="_blank" href="https://www.google.com/maps/place/601+Franklin+Ave+%23215,+Garden+City,+NY+11530/@40.7240625,-73.6325535,17z/data=!3m1!4b1!4m2!3m1!1s0x89c27d3f830e2ed9:0xdfd5639f1b808c62">Garden City, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone2'); ?>"><?php echo get_option('qs_contact_phone2'); ?></a></li>	
			</ul>
		</div>
	</div>-->
		
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
  
			<div class="navbar-header">
				<a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                <img class="pull-right logo" src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png">
            </div>

			<div class="single-nav">

				<div id="navbar">
					<ul class="navbar nav navbar-left">
				       	<li><a href="#about" class="about">About Us</a></li>
                        <li><a href="#physicians" class="physicians">Our Physicians</a></li>
                        <li><a href="#insurance" class="insurance">Accepted Insurance</a></li>
				        <li><a href="#offices" class="contact-button">Contact Us</a></li>
				    </ul>
				</div>

			</div>
		</div> <!-- end .container -->
	</div> <!-- end .navbar -->
