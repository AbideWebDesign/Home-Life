<div class="pb-2">
	<div class="row justify-content-center">
		<div class="col-12">
			
			<?php if ( get_sub_field('lead_text_title') ): ?>
			
				<h1 class="mb-3"><?php the_sub_field('lead_text_title'); ?></h1>
				
			<?php endif; ?>
			
			<?php if ( get_sub_field('lead_text_content') ): ?>
			
				<div class="lead"><?php the_sub_field('lead_text_content'); ?></div>
				
			<?php endif; ?>
			
		</div>
	</div>
</div>