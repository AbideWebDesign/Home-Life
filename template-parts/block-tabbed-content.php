<!-- Tabbed Content Block -->
<?php $x = 0; ?>

<div class="tabbed-content">
	<div class="tabbed-content-header">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<ul class="nav nav-tabs justify-content-center" id="tabbed-content-nav" role="tablist">
						
						<?php if ( have_rows('tabs') ): ?>
						
							<?php while ( have_rows('tabs') ): the_row(); ?>
								
								<?php $x ++; ?>
								
								<li class="nav-item flex-fill">
									<a id="tab-<?php echo $x; ?>" class="nav-link <?php echo ($x == 1) ? 'active' : ''; ?>" data-toggle="tab" href="#pane-<?php echo $x; ?>" role="tab">
										<div class="tab-icon">
											<span class="fa-stack fa-2x">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-<?php the_sub_field('tab_icon'); ?> fa-stack-1x fa-inverse"></i>
											</span>
										</div>
										
										<?php the_sub_field('tab_title'); ?>
									</a>
								</li>
						
							<?php endwhile; ?>
					
						<?php endif; ?>
				
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="tabbed-content-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div id="tab-content" class="tab-content" role="tablist">
						
						<?php if ( have_rows('tabs') ): ?>
							
							<?php $x = 0; ?>
							
							<?php while ( have_rows('tabs') ): the_row(); ?>
								
								<?php $x ++; ?>
								
								<div id="pane-<?php echo $x; ?>" class="lead card tab-pane fade <?php echo ($x == 1) ? 'show active' : ''; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $x; ?>">
									<div class="card-header" role="tab" id="heading-<?php echo $x; ?>">
					                  	<h5 class="mb-0">
					                  		<a data-toggle="collapse" class="<?php echo ($x == 1) ? '' : 'collapsed'; ?>" href="#collapse-<?php echo $x; ?>" aria-expanded="<?php echo ($x == 1) ? 'true' : ''; ?>" aria-controls="collapse-<?php echo $x; ?>">
					                        	<?php the_sub_field('tab_title'); ?>
					                    	</a>	
					                    </h5>					                
						            </div>
						            <div id="collapse-<?php echo $x; ?>" class="collapse <?php echo ($x == 1) ? 'show' : ''; ?>" data-parent="#tab-content" role="tabpanel" aria-labelledby="heading-<?php echo $x; ?>">
										<div class="card-body">
											<?php the_sub_field('tab_content'); ?>
										</div>
						            </div>
								</div>
							
							<?php endwhile; ?>
					
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Tabbed Content Block End -->