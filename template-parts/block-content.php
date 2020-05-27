<div class="py-3">			
	<div class="row">
		<div class="col-12">
			<div class="content-block">
				<div class="row justify-content-between">		
						
					<?php if ( get_sub_field('content_block_heading') ): ?>
						
						<div class="col-12">
				
							<h2><?php the_sub_field('content_block_heading'); ?></h2>
							
						</div>
				
					<?php endif; ?>
					
					<?php if ( get_sub_field('include_content_block_image') ): ?>
					
						<?php $image = get_sub_field('content_block_image'); ?>

						<div class="col-md-3 col-lg-4 <?php echo (get_sub_field('content_block_image_side') == 'Right' ? 'order-1"' : ''); ?>">
					
							<?php echo wp_get_attachment_image($image, 'content block', false, array('class'=>'img-fluid mb-3 mb-md-0')); ?>
							
							<?php if ( wp_get_attachment_caption($image) ): ?>
							
								<div class="bg-primary text-white text-sm p-2">
									
									<?php echo wp_get_attachment_caption($image); ?>
									
								</div>
							
							<?php endif; ?>
							
						</div>
					
					<?php endif; ?>
					
					<div class="<?php echo ( get_sub_field('include_content_block_image') ? 'col-md-9 col-lg-8' : 'col-12' ); ?>">
											
						<?php the_sub_field('content_block_content'); ?>
						
						<?php if (get_sub_field('include_button')): ?>
						
							<?php $link = get_sub_field('button_link'); ?>
							
							<div class="mt-4">
								<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary"><?php echo $link['title']; ?></a>		
							</div>
					
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>