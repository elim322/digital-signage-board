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
      <h1 class="main-title"><?php echo esc_html(CFS()->get('main_title'))?></h1>
      <h2 class="sub-title"><?php echo esc_html(CFS()->get('sub_title'))?></h2>
</div>
			<?php 
          $getImage = CFS()->get('header_logo_2_image');
          $getText = CFS()->get('header_logo_2_text');
          $headerLogoTwoImage = "<img class='header-image' src='" .  $getImage . "' alt='header-logo-2' />"; 
          $headerLogoTwoText = "<h1 class='header-logo-text'>" . $getText . "</h1>";   
          //check if the custom field has a value 
          if( $getImage == '') {
            echo $headerLogoTwoText;
          } else {
            echo $headerLogoTwoImage;
          } 
 
          ?>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
