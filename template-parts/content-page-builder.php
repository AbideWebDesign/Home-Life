<?php if ( have_rows('page_blocks') ): ?>

	<?php $x = 0; ?>

	<?php while ( have_rows('page_blocks') ): the_row(); ?>
		
		<?php $x++; ?>
		
		<?php if ( get_row_layout() == 'tabbed_content' ): ?>

			<?php get_template_part('template-parts/block', 'tabbed-content'); ?>
		
		<?php endif; ?>
		
		<?php if ( $x == 2 && !get_field('include_sidebar_block') ): ?> 
			
			<div class="container my-5">
				
		<?php endif; ?>
			
		<?php if ( get_row_layout() == 'cards' ): ?>

			<?php get_template_part('template-parts/block', 'card'); ?>
		
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'sub_navigation' ): ?>

			<?php get_template_part('template-parts/block', 'sub_navigation'); ?>
		
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'lead_block' ): ?>

			<?php get_template_part('template-parts/block', 'lead'); ?>
		
		<?php endif; ?>

		<?php if ( get_row_layout() == 'content_block' ): ?>

			<?php get_template_part('template-parts/block', 'content'); ?>
		
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'list_group' ): ?>

			<?php get_template_part('template-parts/block', 'list-group'); ?>
		
		<?php endif; ?>		
		
		<?php if ( get_row_layout() == 'child_pages' ): ?>

			<?php get_template_part('template-parts/block', 'child-pages'); ?>
		
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'gallery_block' ): ?>

			<?php get_template_part('template-parts/block', 'gallery'); ?>
		
		<?php endif; ?>
		
		<?php if ( get_row_layout() == 'profiles' ): ?>

			<?php get_template_part('template-parts/block', 'profile'); ?>
		
		<?php endif; ?>
		
		<?php if ( $x == 2 && !get_field('include_sidebar_block') ): ?> 
		
			</div>
		
		<?php endif; ?>
	
	<?php endwhile; ?>
	
<?php endif; ?>
