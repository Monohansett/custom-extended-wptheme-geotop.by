<?php
/*
Template Name: Сервис
*/
?>
<?php get_header(  ) ?>
<div class="page-top-info">
	<div class="container">
		<h4>Сервис</h4>
		<div class="site-pagination">
			<em><a href="/">Главная</a> / <a href="/"><?php the_title( ) ?></a></em>
		</div>
	</div>
</div>
<!-- Page info end -->
<!-- Category section -->
<section class="service-section">
	<div class="container">
		<div class="section-title">
			<h2><?php the_title() ?></h2>
		</div>
		<div class="row">
			<div class="col-lg-12 service">
				<div class="row">
					<?php
					$args = array(
					'sort_order'   => 'ASC',
					'sort_column'  => 'ID',
					'hierarchical' => 1,
					'child_of'     => 24,
					'parent'       => -1,
					'exclude_tree' => '',
					'number'       => '',
					'offset'       => 0,
					'post_type'    => 'page',
					'post_status'  => 'publish',
					);
					$pages = get_pages( $args );
					foreach( $pages as $post ){
					setup_postdata( $post );
					?>
					<div class="col-lg-4 col-sm-6">
						<div class="product-item">
							<div class="pi-pic">
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail( 'service-preview' , $attr = '' ) ?>
								</a>
							</div>
							<div class="pi-text text-center">
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</div>
						</div>
					</div>
					<?php
					}
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(  ) ?>