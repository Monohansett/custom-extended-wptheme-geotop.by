<ul class="sub-menu" style="columns: 1; width: 200px">
	<?php
	$args = array(
		'depth'        => 0,
		'child_of'     => 0,
		'exclude'      => '',
		'exclude_tree' => '',
		'include'      => '165,169,171',
		'title_li'     => NULL,
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order, post_title',
		'sort_order'   => 'ASC',
		'link_before'  => '',
		'link_after'   => '',
		'meta_key'     => '',
		'meta_value'   => '',
		'number'       => '',
		'offset'       => '',
		'walker'       => '',
		'post_type'    => 'page', // из функции get_pages()
	);
	wp_list_pages( $args ); ?>
</ul>
<?php wp_reset_postdata(); ?>