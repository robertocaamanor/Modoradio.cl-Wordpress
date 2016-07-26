<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modoradio</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Integracion FB -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=609768322408511";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Fin Integracion con FB -->
</head>
<body>	
	<header>
		<div class="container">			
			<div id="logo">
				<img src="http://i.imgur.com/SSEAqum.png" alt="">
			</div>			
			<nav>
				<?php wp_nav_menu(
					array(
						'container' => false,
						'items_wrap' => '<ul id="menu-top">%3$s</ul>',
						'theme_location' => 'menu'
					)); ?>
			</nav>			
		</div>
	</header>