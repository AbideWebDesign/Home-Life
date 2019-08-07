<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div id="wrapper-footer">

	<div class="container">

		<div class="row">

			<div class="col-lg-4 order-2 order-lg-1 text-center text-lg-left">
				<div class="mb-4">
					<a class="footer-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php the_field('logo','options'); ?>" /></a>
				</div>
				<div class="d-flex justify-content-center justify-content-lg-start">
					<div class="pr-5">
						<?php the_field('address', 'option'); ?><br />
						<?php the_field('phone', 'option'); ?>
					</div>
					<div>
						<p class="mb-1"><strong>Connect with Us</strong></h4>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="mailto: <?php the_field('email', 'option'); ?>"><i class="fa fa-lg fa-envelope"></i></a></li>
						</ul>	
					</div>
				</div>
				<div class="mt-3 mb-3">Home Life Inc. is a 501(c)(3)  |  <a href="#">Privacy Policy</a></div>
				<div class="provider-link"><a href="https://abidewebdesign.com" target="_blank">Website Design and Maintenance by Abide Web Design</a></div>
			</div>
			<div class="col-lg-8 order-1 order-lg-2 mb-4 mb-lg-0">
				<div class="d-flex flex-column">
					<div id="footer-nav" class="mb-4 order-2 order-md-1">
						<?php 
							wp_nav_menu(
								array(
									'theme_location'  => 'footer',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'd-flex flex-column flex-md-row list-md-inline m-0 p-0',
									'fallback_cb'     => '',
									'menu_id'         => 'footer-menu',
									'depth'           => 1,
								)
							); 
						?>
					</div>
					<div id="newsletter" class="bg-light py-4 px-3 px-md-4 mb-5 mb-md-0 order-1 order-md-2">
						<h3 class="text-center text-md-left">Email Newsletter Signup</h3>
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
					</div>
				</div>
			</div>
		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>

