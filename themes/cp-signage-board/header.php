<?php
/**
 * The header for our theme.
 *
 * @package Digital_Signage_Board
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
      <div class="header-title">
        <img class="main-logo" src="<?php echo esc_html(CFS()->get('title_logo'))?>" alt='header-logo'/>
      </div>
      <img class='header-image' src='<?php echo esc_html(CFS()->get('header_logo_2_image'))?>' alt='header-logo-2' />; 
 

			</header><!-- #masthead -->

			<div id="content" class="site-content">
