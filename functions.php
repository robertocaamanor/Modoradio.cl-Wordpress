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

/* Imagenes Responsive */

function bootstrap_responsive_images( $html ){
    $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'
    // check if there are already classes assigned to the anchor
    if ( preg_match('/<img.*? class="/', $html) ) {
        $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
    } else {
        $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
    }
    // remove dimensions from images,, does not need it!
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 ); 

// Videos responsive autómaticos
function activate_jquery() {
	
        wp_enqueue_script( 'jquery');
}

add_action( 'wp_enqueue_scripts', 'activate_jquery' );
 ?>