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
		
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
  
			<div class="navbar-header">
				<a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                <img class="pull-right logo" src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png">
            </div>

            <div id="navbar">
                <ul class="navbar nav navbar-left">
                    <li><a href="#home" class="home">Home</a></li>
                    <li><a href="#about" class="about">About Us</a></li>
                    <li><a href="#physicians" class="physicians">Our Physicians</a></li>
                    <li><a href="#insurance" class="insurance">Accepted Insurance</a></li>
                    <li><a href="#offices" class="contact-button">Contact Us</a></li>
                </ul>
            </div>

		</div> <!-- end .container -->
	</div> <!-- end .navbar -->
