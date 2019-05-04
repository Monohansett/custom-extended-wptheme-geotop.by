
<ul class="sub-menu">

	<?php 
		$args = array(
		'orderby'            => 'ID',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 0,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '1',
		'exclude_tree'       => '',
		'include'            => '2,3,4,5,6,7,8,9,10,11,12,13,14,15,16',
		'hierarchical'       => true,
		'title_li'           => NULL,
		'number'             => NULL,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'category',
		'walker'             => 'Walker_Category',
		'hide_title_if_empty' => false,
		'separator'          => '<br />',
	);

	wp_list_categories( $args );
	?>
</ul>

<?php wp_reset_postdata(); ?>