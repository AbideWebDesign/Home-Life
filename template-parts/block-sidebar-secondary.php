<?php if ( have_rows('secondary_sidebar_links') ): ?>
	
	<div id="wrapper-secondary-links">
						
		<?php while ( have_rows('secondary_sidebar_links') ): the_row(); ?>
				
			<?php $link = get_sub_field('secondary_sidebar_link'); ?>
			
			<div class="secondary-link"><a class="py-3 px-4" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></div>
						
		<?php endwhile; ?>
		
	</div>
	
<?php endif; ?>

