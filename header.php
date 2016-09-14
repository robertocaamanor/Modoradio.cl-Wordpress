<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv=”Content-Type” content=”<?php bloginfo(‘html_type’); ?>; charset=<?php bloginfo(‘charset’); ?>” />
	<title><?php wp_title(""); ?><?php if(wp_title("", false)) { echo ' |'; } ?> Modoradio</title>
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
				<a href="<?php echo get_option('home'); ?>"/><img src="http://i.imgur.com/SSEAqum.png" alt=""></a>
			</div>

			<div class="boton-hamburguesa">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                <span class="glyphicon glyphicon-menu-hamburger"></span>
	            </button>
			</div>
		    
		    <div class="contenido-boton">
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav>
						<?php wp_nav_menu(
							array(
								'container' => false,
								'items_wrap' => '<ul id="menu-top">%3$s</ul>',
								'theme_location' => 'menu'
							)); ?>
					</nav>	
				</div><!-- /.navbar-collapse -->			    	
		    </div>			
		</div>
	</header>