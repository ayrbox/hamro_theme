<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<!-- FOOTER -->
  <footer class="footer-section">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">


        <div class="col-md-3">
          <h4 class="footer-heading">About</h4>
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer-menu',
							'container_class' => 'footer-menu-wrapper',
							'container_id'    => 'footermenuAbout',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
        </div>

        <div class="col-md-6">
          <h4 class='footer-heading'>Connect With Us</h4>
          <ul class="social-icons social-icons-footer">            
            <li>
                <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
            </li>
            <li>
                <a href="http://instagram.com" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
            </li>
            <li>
                <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
            </li>
          </ul>
        </div>

				<div class="col-md-3">
					<h4>Contact Us</h4>

          <address class="footer-contact contact-location">
						<i class="fa fa-map-marker fa-2x"></i>
						Hamro Nepal Ko <br>
						South East, London
          </address>
					<!-- <div class="footer-contact contact-number">
						<i class="fa fa-phone fa-2x"></i>
						<a href="tel:7508665459">7508665459</a>            
					</div> -->
					<div class="footer-contact contact-email">
						<i class="fa fa-envelope fa-2x"></i>
						<a href="mailto:enquiry@hamronepalko.com">enquiry@hamronepalko.com</a>
					</div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright-section">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-12">
            &copy; <?php echo '2007 - ' . date('Y'); ?> www.hamronepalko.com. All right reserved.
        </div>
      </div>
    </div>
	</div>



</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

