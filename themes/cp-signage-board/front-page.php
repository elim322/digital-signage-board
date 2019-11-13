<?php
/**
 * The main template file.
 *
 * @package Digital_Signage_Board
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <div class="container">
      <!-- PDF SECTION -->
      <section class="pdf-documents">
        <div class="pdf-container">
          <h2 class="pdf-subtitle"><?php echo esc_html(CFS()->get('box_left_title'))?></h2>
          <?php 
          $getImage = CFS()->get('box_left_image');
          $getText = CFS()->get('box_left_text');
          $boxLeftImage = $getImage; 
          $boxLeftText = "<h3 class='box-text'>" . $getText . "</h3>";   
          //check if the custom field has a value 
          if( $getImage == '') {
            echo $boxLeftText;
          } else {
            echo $boxLeftImage;
          } 
 
          ?>
          
        </div>
        <div class="pdf-container">
        <h2 class="pdf-subtitle"><?php echo esc_html(CFS()->get('box_right_title'))?></h2>
        <?php 
          $getImage = CFS()->get('box_right_image');
          $getText = CFS()->get('box_right_text');
          $boxRightImage = $getImage; 
          $boxRightText = "<h3 class='box-text'>" . $getText . "</h3>";   
          //check if the custom field has a value 
          if( $getImage == '') {
            echo $boxRightText;
          } else {
            echo $boxRightImage;
          } 
 
          ?>
        </div>
      </section>

      <section>
        <?php echo CFS()->get('banner_img') ?>
    </section>

      <!-- OPTIONAL VIDEOS SECTION (There is a second template without video section) -->
      <section>
        <?php 
        $video = CFS()->get('video');
        $image = CFS()->get('alt_image');
        $getVideo = "<video width='100%' height='500%' id='vid' autoplay muted loop>" . "<source src='" . $video . "'type='video/mp4' />" . "</video>";
        $getAltImage = $image; 
        if( $image == '') {
          echo $getVideo;
        } else {
          echo $getAltImage;
        }
        ?>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>