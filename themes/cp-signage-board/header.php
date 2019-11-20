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
      <?php 
      $getImage = CFS()->get('title_logo');
      $imageValue = "<img class='main-logo' src='" . $getImage . "' />";
      if($getImage == '') {
        null;
      } else {
        echo $imageValue;
      }
 ?>      </div>
      <?php 
      $getImage = CFS()->get('header_logo_2_image');
      $imageValue = "<img class='header-image' src='" . $getImage . "' />";
      if($getImage == '') {
        null;
      } else {
        echo $imageValue;
      }
 ?>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
