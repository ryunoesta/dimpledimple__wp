<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

function my_enqueue_styles() {
    wp_enqueue_style('reset', get_stylesheet_directory_uri().'/reset.css', array());
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css', array('reset'));
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; 
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>
