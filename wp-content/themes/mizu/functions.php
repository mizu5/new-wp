<?php 

//Thumbnails 사용
add_theme_support('post-thumbnails');
//POST-FORMAT 사용
add_theme_support( 'post-formats', array( 'image', 'quote' ) );
// Menus
register_nav_menus( array(
		'main_menu' => 'Main Menu',
));

//Sidebar
register_sidebar(array(
		'name' => __('Right Sidebar'),
		'before_widget' => '<div class="jb-widget">',
		'after_widget' => '</div>',
));
register_sidebar(array(
		'name' => __('Left Sidebar'),
));

?>