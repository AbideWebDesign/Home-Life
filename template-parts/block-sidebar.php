<?php 
	
	$page_ids = array();
		
	$page_objects = get_page_links($post->ID);
	
	foreach ( $page_objects as $page ) {
		
		$page_ids[] = array('id' => $page->ID, 'label' => get_the_title($page->ID));
		
	}		
	
	$parent = get_parent_object($post->ID);

?>
<?php if ( $page_ids ): ?>

	<div id="wrapper-subnav" class="bg-primary py-3 d-none d-md-block mb-4">
		<h3 class="py-2 pl-4 pr-3 mb-3"><?php echo $parent->post_title; ?></h3>
		<ul class="fa-ul mb-0 ml-5">
	
			<?php foreach ( $page_ids as $page ): ?>
			
				<li class="mb-1">
					<span class="fa-li"><i class="fa fa-circle"></i></span> <a href="<?php echo get_the_permalink($page['id']); ?>"><?php echo $page['label']; ?></a>
				</li>
	
			<?php endforeach; ?>
	
		</ul>
	</div>

<?php endif; ?>	
