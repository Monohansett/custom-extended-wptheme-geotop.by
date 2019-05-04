<?php get_header() ?>
<?php $subcat = get_queried_object();
	$cat_parent_slug = get_term_parents_list($subcat->parent, 'category') ;
?>
<div class="page-top-info">
	<div class="container">
		<h4><?php echo $subcat->name  ?></h4>
		<div class="site-pagination">
			<em><a href="/">Главная /</a> <a href="/catalog">Каталог /</a> <a href=""><?php echo $cat_parent_slug ?> </a> <a href=""><?php echo $subcat->name ?></a></em>
		</div>
	</div>
</div>
<section class="product-filter-section">
	<div class="container">
		<div class="section-title" style="padding-top: 30px;">
			<h2>
				<?php echo $subcat->name ?>
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-12  order-1 order-lg-2 mb-5 mb-lg-0">
				<div class="row">
					<?php
					if ( have_posts() ){
						while ( have_posts() ){
							the_post();
					?>
					<div class="col-lg-3 col-sm-6">
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
					<?php
					}
					} else {
						echo wpautop( 'Постов для вывода не найдено.' );
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer() ?>