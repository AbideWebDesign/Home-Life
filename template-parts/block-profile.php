<!-- Profile Block -->

<div class="py-3">
	
	<div class="row">
	
		<div class="col">
	
			<h2><?php the_sub_field('profile_heading'); ?></h2>
	
		</div>
	
	</div>
	
	<div class="d-flex flex-column flex-lg-row">
		
		<?php if ( have_rows('profiles') ): ?>
		
			<?php while ( have_rows('profiles') ): the_row(); ?>
		
				<div class="profile-block flex-lg-fill align-items-stretch mb-4 mb-md-2 mb-lg-0">
		
					<?php $profile = get_sub_field('profile_content'); ?>
					
					<?php $link = $profile['profile_link']; ?>
		
					<div class="profile text-center h-100">
		
						<?php $image = $profile['profile_image']; ?>	
							
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo wp_get_attachment_image($image['id'], 'profile', 0, array('class' => 'card-img-top img-fluid')); ?></a>
									
						<div class="profile-body">
							
							<h3><?php the_sub_filed('profile_name'); ?></h3>
										
							<?php if ( $profile['profile_link'] ): ?>
			
								<div class="text-center my-3">
									
									<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><i class="fa fa-envelope"></i> Email</a>
								
								</div>

							<?php endif; ?>
			
						</div>
						
					</div>
					
				</div>
			
			<?php endwhile; ?>
			
		<?php endif; ?>
		
	</div>

</div>	

<!-- profile Block End -->