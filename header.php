<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title><?php if ( is_front_page() ) { ?><? bloginfo('name'); ?> - <?php bloginfo('description'); } else { wp_title(''); } ?></title>

		<!-- Meta tags -->
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Don't forget to update the bookmark icons (favicon.ico and apple-touch-icons) in the root: http://mathiasbynens.be/notes/touch-icons -->

		<!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
		<!--[if lte IE 8]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie.css" />
		<![endif]-->
	<?php if (is_front_page()) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/flexslider.css" />
	<?php } ?>
		<!--Wordpress Neccessities -->
		<?php wp_enqueue_script('jquery'); ?>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script> 
		<?php wp_head(); ?>
		<!-- JavaScript -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div id="container-head">
			
			<div id="header">
				
				<div id="header-left">
				<div id="logo"><a href="http://krieger.jhu.edu" title="Johns Hopkins University Zanvyl Krieger School of Arts & Sciences"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Johns Hopkins University Zanvyl Krieger School of Arts & Sciences" /></a></div>
				</div> <!-- End header-left -->
			
				<div id="header-right">
										<div id="searchbar">
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" size="put_a_size_here" name="s" id="s" value="Search this site" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
<input type="submit" id="searchsubmit" value="Search" class="btn" />
</div>
</form>
					</div>					
				</div><!-- End header-right -->
									<div id="blogtitle">
					<h1><?php bloginfo('name'); ?></h1>
					</div>

				<div class="clearboth"></div>			
			</div> <!-- End header -->
			
		</div> <!-- End container-head-->
		
		<div id="nav-break"></div>
	
									
