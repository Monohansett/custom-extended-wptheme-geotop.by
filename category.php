<?php get_header() ?>
<?php
				if( is_category() ) {
				$cat_name = get_queried_object()->name;
				$cat_slug = get_queried_object()->slug;
				}
?>
<div class="page-top-info">
	<div class="container">
		<h4><?php echo $cat_name; ?></h4>
		<div class="site-pagination">
			<em><a href="/">Главная</a> / <a href="/catalog">Каталог</a> / <a href=""><?php echo $cat_name; ?></a></em>
		</div>
	</div>
</div>
<!-- Page info end -->
<!-- Category section -->
<section class="category-section spad">
	<div class="container">
		<div class="section-title">
			<h2>
			<?php echo $cat_name ?>
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-12  order-1 order-lg-2 mb-5 mb-lg-0">
				<div class="row">
					<?php
					$parent_id = get_query_var( 'cat', '' );
					# получаем дочерние рубрики
					$sub_cats = get_categories( array(
					'child_of' => $parent_id,
					'hide_empty' => 0
					) );
					if( $sub_cats ){
					foreach( $sub_cats as $cat ){
					?>
					<div class="col-lg-3 col-sm-6">
						<div class="product-item">
							<div class="subcats text-center">
								<a class="subcat_btn" href="<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
							</div>
						</div>
					</div>
					<?php
					}
						wp_reset_postdata(); // сбрасываем глобальную переменную пост
					}
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12  order-1 order-lg-2 mb-5 mb-lg-0">
				<div class="row">
					<?php
					$posts = get_posts( array(
					'numberposts' => 0,
					'category_name'    => $cat_slug,
					'orderby'     => 'date',
					'order'       => 'DESC',
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
					<div class="col-lg-3 col-sm-6" style="padding-top: 15px;">
						<div class="product-item">
							<div class="pi-pic">
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail('product-preview', '') ?>
								</a>
							</div>
							<div class="pi-text text-center">
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</div>
						</div>
					</div>
					<?php
					}
					wp_reset_postdata(); // сброс
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer() ?>