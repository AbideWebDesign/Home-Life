<section class="carousel-wrap <?php echo (get_field('hero_banner_type') != 'Main' ? 'carousel-wrap-sm' : ''); ?>">
	<div id="carousel" class="carousel slide" data-ride="carousel">
	
	<?php $images = get_field('hero_banners'); ?>

		<?php if( $images ): ?>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				
				<?php $x = 0; ?>
				
				<?php foreach( $images as $image ): ?>
					
					<div class="carousel-item <?php if ($x == 0): ?>active<?php endif; ?>">
											  		
				  		<?php if ( get_field('hero_banner_type') == 'Main' ): ?>
					  		
					  		<?php echo wp_get_attachment_image($image['id'], 'hero banner large', false, array('class'=>'d-none d-md-block')); ?>
					  		<?php echo wp_get_attachment_image($image['id'], 'hero banner mobile', false, array('class'=>'d-md-none')); ?>
					  		
					  		<?php if ( $image['title'] || $image['caption'] ): ?>
						  		
						  		<div class="carousel-caption d-flex d-md-block align-items-center">
											
							  		<?php if ( $image['caption'] ): ?>
							
							  		<div class="carousel-caption-bg d-flex d-md-block flex-column">
						  				<p><?php echo $image['caption']; ?></p>
						  				
						  				<?php if ( get_field('hero_banner_link', $image['id']) ): ?>
						  					
						  					<div id="btn-carousel" class="d-flex justify-content-md-end mt-3">
							  					
						  						<a href="<?php the_field('hero_banner_link', $image['id']); ?>" class="btn btn-primary"><?php the_field('hero_banner_link_label', $image['id']); ?> <i class="fa fa-chevron-right"></i></a>
						  					
						  					</div>
						  				
						  				<?php endif; ?>
	
						  			</div>
						  	
						  			<?php endif; ?>
						  	
						  		</div>
	
						  	<?php endif; ?>
						
						<?php else: ?>
						
							<?php echo wp_get_attachment_image($image['id'], 'hero banner small', false, array('class'=>'d-block w-100 img-fluid')); ?>

						<?php endif; ?>
					
					</div>
				
				<?php $x ++; ?>
				
				<?php endforeach; ?>
				
			</div>
									
		<?php endif; ?>
		
	</div>
</section>