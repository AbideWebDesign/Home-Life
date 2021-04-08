<!-- Card Block -->
<div class="py-3">
	
	<?php if ( get_sub_field('card_heading') ): ?>
		
		<div class="row">
		
			<div class="col">
		
				<h2><?php the_sub_field('card_heading'); ?></h2>
		
			</div>
		
		</div>
		
	<?php endif; ?>
	
	<div class="row">
		
		<?php if ( have_rows('cards') ): ?>
		
			<?php while ( have_rows('cards') ): the_row(); ?>
		
				<div class="col-md-4 mb-4 mb-md-2 mb-lg-0">
		
					<?php $card = get_sub_field('card_content'); ?>
					
					<?php $link = $card['card_link']; ?>
		
					<div class="card text-center h-100">
		
						<?php if ( $card['card_image'] ): ?>
		
							<?php $image = $card['card_image']; ?>	
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'card-img-top img-fluid')); ?></a>
						
						<?php else: ?>
						
							<?php echo wp_get_attachment_image($image['id'], 'card-4', 0, array('class' => 'card-img-top img-fluid')); ?>
						
						<?php endif; ?>
			
						<div class="card-body">
							
							<?php if ( $card['card_title'] ): ?>
							
								<h5 class="mb-2 text-primary"><strong><?php echo $card['card_title']; ?></strong></h5>
								
							<?php endif; ?>
							
							<?php if ( $card['card_content'] ): ?>
							
								<div class="mb-3 text-center text-sm">
									
									<?php echo $card['card_content']; ?>
									
								</div>
								
							<?php endif; ?>
										
							<?php if ( $card['card_link'] ): ?>
			
								<div class="text-center my-3">
									<a class="btn-text" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?> <i class="fa fa-long-arrow-right"></i></a>
								</div>

							<?php endif; ?>
			
						</div>
					</div>
				</div>
			
			<?php endwhile; ?>
			
		<?php endif; ?>
		
	</div>

</div>	
<!-- Card Block End -->