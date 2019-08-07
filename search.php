<?php
/**
 * The template for displaying search results pages.
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>
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

<div id="wrapper-search" class="py-5 bg-light">

	<div class="container" id="content" tabindex="-1">

		<div class="row justify-content-center">

			<div class="col-lg-10">
				
				<header class="page-header">
	
					<h1 class="mb-3">Search Results</h1>
	
				</header><!-- .page-header -->
				<form method="get" id="searchform" class="mb-4" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'homelife' ); ?></label>
					<div class="input-group">
						<input class="field form-control form-control-lg border-right-0 border" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'homelife' ); ?>" value="<?php the_search_query(); ?>">
						<span class="input-group-append">
							<button class="btn btn-sm btn-outline-default border-left-0 border" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>

				<?php if ( have_posts() ) : ?>

					

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php $excerpt = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>

						<div class="bg-white p-4 mb-2">
							<div>	
								<a href="<?php the_permalink(); ?>"><h3 class="mb-1"><?php the_title(); ?></h3></a>
								<small><?php the_permalink(); ?></small>
							</div>
							
							<?php if ($excerpt): ?> 
							
								<div class="border-top mt-1 pt-3">
								
									<?php echo $excerpt; ?>

								</div>
							
							<?php endif; ?>
							
						</div>
							
					<?php endwhile; ?>

				<?php else : ?>

					<div class="bg-white p-4">
						<p class="mb-0"><strong>No Results Found</strong></p>
					</div>
					
				<?php endif; ?>
				
				<!-- The pagination component -->
				<div class="mt-4">
					
					<?php homelife_pagination(); ?>
				
				</div>
	
			</div><!-- #main -->
	
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer(); ?>
