<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Jonathan Bartlett</title>

<meta name="keywords" content="Illustrartion, Design, Graphic Design, Photoshop, New York, NYC, Brooklyn, Creative, Book Jackets, Studio, Graphics, DIY, Portfolio, JB, Jonathan, Bartlett, Art, Editorial, advertising, traditional,  Print, Identity" />

<meta name="description" content="Brooklyn based illustrator contributing to a wide range of magazines, book publishers, and advertising clients" />

<link rel="profile" href="http://gmpg.org/xfn/11" />


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/1140.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/jscrollpane.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen, projection" /> 

<!-- Typekit -->
<script type="text/javascript" src="http://use.typekit.com/vty4lrm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed group container">

	<div id="main" class="group row">