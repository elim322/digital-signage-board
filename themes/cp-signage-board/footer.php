<?php
/**
 * The template for displaying the footer.
 *
 * @package Digital_Signage_Board
 */

?>
			</div><!-- #content -->

				<footer id="colophon" role="contentinfo">
        <div id="footer-sidebar" class="secondary">
          <div id="footer-sidebar1">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
            }
            ?>
            </div>
            <div id="footer-sidebar2">
              <?php
              if(is_active_sidebar('footer-sidebar-2')){
              dynamic_sidebar('footer-sidebar-2');
              }
              ?>
            </div>
            <div id="footer-sidebar3">
              <?php
              if(is_active_sidebar('footer-sidebar-3')){
              dynamic_sidebar('footer-sidebar-3');
              }
              ?>
            </div>
        </div>
      </footer>
				</div><!-- .site-info -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
