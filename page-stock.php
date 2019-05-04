<?php
/*
Template Name: Акции
*/
?>
<?php get_header() ?>
<div class="page-top-info">
	<div class="container">
		<h4><?php the_title() ?></h4>
		<div class="site-pagination">
			<em><a href="/">Главная</a> / <a href="/"><?php the_title( ) ?></a></em>
		</div>
	</div>
</div>
<section class="stock-section">
	<div class="container">
<!-- 		<div class="section-title text-left">
			<h2>Акции</h2>
		</div> -->
		<div class="row">
			<div class="col-lg-12 mb-5 mb-lg-0">
				<div class="row">
					<?php // параметры по умолчанию
							$posts = get_posts( array(
								'numberposts' => 0,
								'category_name'    => 'stocks',
								'orderby'     => 'date',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							) );
							foreach( $posts as $post ){
								setup_postdata($post);
					?>
					<div class="col-lg-6 col-sm-6">
						<div class="stock-title text-left">
							<h3><?php the_title() ?></h3>
							<hr>
						</div>
						<div class="product-item">
							<a href="<?php the_permalink() ?>">
								<div class="pi-pic">
									<?php the_post_thumbnail( 'stock-preview', $attr = '' ) ?>
								</div>
							</a>
							<a href="<?php the_permalink() ?>">
								<div class="pi-text">
									<?php the_excerpt() ?>
								</div>
							</a>
						</div>
					</div>
					<?php }
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer() ?>