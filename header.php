<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site" id="page">

	<div id="wrapper-topnav" class="py-1">
		
		<div class="container">
	
			<div class="row justify-content-center justify-content-sm-end">
				
				<div class="col-auto">
					<ul class="list-inline mb-0">
						<li class="list-inline-item border-right"><a href="<?php echo home_url('/contact'); ?>">Contact Us</a></li>
						<li class="list-inline-item pr-0"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="mailto:<?php the_field('email', 'option'); ?>"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				
			</div>
			
		</div>
	
	</div>
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'homelife' ); ?></a>
		
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-auto align-self-center text-center text-md-left mt-3 mt-sm-0 mb-sm-0">
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php the_field('logo','options'); ?>" /></a>
				</div>
				<div class="col-12 col-sm-auto align-self-center flex-sm-grow-1 pt-4 pb-4 pb-lg-0">
					<div class="d-flex justify-content-sm-end mb-lg-3">
						<form method="get" id="searchform" class="d-none d-lg-block" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
							<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'homelife' ); ?></label>
							<div class="input-group">
								<input class="field form-control border-right-0 border" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'homelife' ); ?>" value="">
								<span class="input-group-append">
									<button class="btn btn-sm btn-outline-default border-left-0 border" type="submit">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</form>
						<div class="pl-xl-2 navbar-dark d-flex flex-grow-1 flex-sm-grow-0">
							<div class="flex-fill"><a href="<?php echo home_url('/donate'); ?>" id="btn-donate" class="btn btn-primary d-block d-inline-block">Donate</a></div>
							<div class="flex-fill">
								<a class="shiftnav-toggle shiftnav-toggle-button navbar-toggler d-block d-sm-inline-block d-lg-none w-100 text-center" data-shiftnav-target="shiftnav-main"><span class="navbar-toggler-icon"></span> <span class="navbar-toggler-text">Menu</span> </a>
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-12">
							<nav class="navbar navbar-expand-lg p-0">
								
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => 'navbarNavDropdown',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'main-menu',
										'depth'           => 2,
										'walker'          => new homelife_WP_Bootstrap_Navwalker(),
									)
								); ?>
								
							</nav><!-- .site-navigation -->
						</div>
					</div>
				</div>
			</div>
		
		</div><!-- .container -->

	</div><!-- #wrapper-navbar end -->
