<?php
/*
Template Name: Цены
*/
?>
<?php $price_table = get_field('price_table') ?>
<?php get_header() ?>
<div class="page-top-info">
	<div class="container">
		<h4><?php the_title()?></h4>
		<div class="site-pagination">
			<em><a href="/">Главная</a> / <a href="/"><?php the_title( ) ?></a></em>
		</div>
	</div>
</div>
<section class="product-filter-section">
	<div class="container">
		<div class="section-title" style="padding-top: 30px; padding-bottom: 20px">
			<h2>Прайс-лист</h2>
		</div>
		<div class="container">
			<?php echo $price_table ?>
		</div>
	</div>
</section>
<?php get_footer() ?>