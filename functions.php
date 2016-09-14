<?php 

register_nav_menus(array(
	'menu' => 'Menu superior',
	));

add_theme_support('post-thumbnails');
add_image_size('list-articles-thumbs', 450, 370, true);
add_image_size('single-thumbs', 900, 420, true);

register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

register_sidebar(array(
	'name' => 'Footer',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

// Imagenes responsive automaticos
function responsive_images($atts, $content = null) {
     return '<div class="image-resized">' . $content .'</div>';
}
 
add_shortcode('responsive', 'responsive_images');

// Videos responsive autómaticos
function activate_jquery() {
	
        wp_enqueue_script( 'jquery');
}

add_action( 'wp_enqueue_scripts', 'activate_jquery' );
 ?>