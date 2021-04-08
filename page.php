<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php if ( get_field('include_hero_banner') ): ?>

	<?php get_template_part('template-parts/block', 'hero-banner'); ?>

<?php endif; ?>

<?php if ( get_field('include_breadcrumbs') ): ?>

	<div id="wrapper-breadcrumbs" class="bg-primary py-2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
						
						if ( function_exists('yoast_breadcrumb') ):
						  
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						
						endif;
					?>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php if ( get_field('include_sidebar_block') ): ?>
	
	<div class="container my-5">
		<div class="row">
			<div class="col-md-4 col-lg-3 order-2 order-md-1">
				
				<?php get_template_part('template-parts/block', 'sidebar'); ?>
				
				<?php get_template_part('template-parts/block', 'sidebar-secondary'); ?>
				
			</div>
			<div class="col-md-8 col-lg-9 order-1 order-md-2">
				
				<?php get_template_part('template-parts/content', 'page-builder'); ?>
			
			</div>
		</div>
	</div>

<?php else: ?>
	
	<?php get_template_part('template-parts/content', 'page-builder'); ?>				
	
<?php endif; ?>

<?php get_template_part('template-parts/block', 'cta'); ?>

<?php get_footer(); ?>
