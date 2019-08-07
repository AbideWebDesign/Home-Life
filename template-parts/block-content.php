<div class="py-3">			
	<div class="row">
		<div class="col-12">
			<div class="content-block">
				<div class="content-block-wrap" <?php echo (get_sub_field('content_block_image_side') == 'Right' ? 'style="flex-direction: row-reverse;"' : ''); ?>>
					
					<?php if(get_sub_field('include_content_block_image')): ?>
					
						<?php $image = get_sub_field('content_block_image'); ?>
						
						<?php $image_type = (get_sub_field('content_block_type') == 'Tall' ? 'content block tall' : 'content block'); ?>

						<div class="content-block-image">
					
							<?php echo wp_get_attachment_image($image, $image_type, false); ?>
					
						</div>
					
					<?php endif; ?>
					
					<div class="content-block-content align-self-center <?php echo (get_sub_field('include_content_block_image') ? '' : 'content-block-content-full');  ?>">
					
						<?php if (get_sub_field('content_block_heading')): ?>
					
							<h2><?php the_sub_field('content_block_heading'); ?></h2>
					
						<?php endif; ?>
					
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