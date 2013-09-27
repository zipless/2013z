<?php
/**
 * @package WordPress
 * @subpackage 2013z
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">


<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>


<style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>



<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="wrap">



<header>
<div id="head">
<h1 id="logo">
	<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/z.png" alt="<?php bloginfo('name'); ?>"></a>
</h1>
<p id="desc" class="none"><?php bloginfo('description'); ?></p>
<nav>
<div id="gnavi">
　<?php wp_nav_menu(); ?><br clear="all">

</div>
</nav>
</div>
</header>



<div id="contents">













