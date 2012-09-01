<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");
add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
	register_nav_menus(
array(
'main' => 'Main Nav'
)
);
}

if ( function_exists( 'register_sidebar' ) ) {
register_sidebar( array (
'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
'id' => 'primary-widget-area',
'description' => __( 'The primary widget area', 'dir' ),
'before_widget' => '<div class="col2 widget">',
'after_widget' => "</div>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
require_once('portfolio-type.php');

add_action('init', 'director_rewrite');
function director_rewrite() {
global $wp_rewrite;
$wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
add_rewrite_rule('typename/([0-9]{4})/(.+)/?$',
'index.php?typename=$matches[2]', 'top');
$wp_rewrite->flush_rules();
}

require_once('portfolio-type.php'); 

    add_filter('excerpt_length', 'my_excerpt_length');  
      
    function my_excerpt_length($length) {  
      
        return 25;   
      
    }  
      
    add_filter('excerpt_more', 'new_excerpt_more');    
      
    function new_excerpt_more($text){    
      
        return ' ';    
      
    }    
      
    function portfolio_thumbnail_url($pid){  
        $image_id = get_post_thumbnail_id($pid);    
        $image_url = wp_get_attachment_image_src($image_id,'screen-shot');    
        return  $image_url[0];    
    }  

?>

