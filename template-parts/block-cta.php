<?php if ( get_field('include_cta_block') ): ?>
	
	<?php $value = get_field('page_cta_block'); ?>
		
	<?php if ( have_rows('call_to_action_blocks', 'option') ): ?>
						
		<?php while ( have_rows('call_to_action_blocks', 'option') ): the_row(); ?>
			
				<?php if ( get_sub_field('cta_title') == $value ): ?>

					<!-- CTA Block -->
					<div id="cta-block" class="bg-primary py-5">
						<div class="container">
							<div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
								<div class="mr-md-4 text-center text-md-left">
									<h2 class="mb-0 text-white"><?php the_sub_field('cta_title'); ?></h2>
								</div>
								
								<?php if (get_sub_field('include_a_button')): ?>
								
									<div class="mt-3 mt-md-0"><a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary btn-lg btn-light"><?php the_sub_field('button_label'); ?></a></div>
												
								<?php endif; ?>

							</div>
						</div>
					</div>
					<!-- CTA Block End -->
					
				<?php endif; ?>
			
		<?php endwhile; ?>
	
	<?php endif; ?>
		 
<?php endif; ?>