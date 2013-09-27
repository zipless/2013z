<?php
/**
 * @package WordPress
 * @subpackage 2013z
 */

add_theme_support( 'automatic-feed-links' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));


add_theme_support( 'menus' );
//カスタムメニューを有効にする
add_theme_support( 'post-thumbnails', array( 'post' ) );
//アイキャッチを有効にする

?>
