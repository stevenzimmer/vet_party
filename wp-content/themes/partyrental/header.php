
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name')?></title>
	<!-- CSS files -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<!-- CSS files -->
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!-- Favicon -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div id="myNavbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
		            <li><a href="#jumpers">JUMPERS</a></li>
		            <li><a href="#canopies">CANOPIES</a></li>
		            <li><a href="#machines">MACHINES</a></li>
		            <li><a href="#about">ABOUT</a></li>
		        </ul>	
				<span class="navbar-text navbar-right"><i class="fa fa-mobile" aria-hidden="true"></i> (209) 489-7588 <span style="margin-left:5px;margin-right:5px">|</span> <a href="mailto:<?php bloginfo('admin_email')?>" class="navbar-link"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php bloginfo('admin_email')?></a></span>
			</div>
		</div>
	</nav>