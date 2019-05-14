<?php
/*
Template Name: Запись новости
Template Post Type: post;
*/
?>
<?php get_header() ?>
<div class="page-top-info">
	<div class="container">
		<h4><?php the_title( ) ?></h4>
		<div class="site-pagination">
			<a href="/">Главная</a> /
			<a href="/news">Новости</a> /
			<a href=""><?php the_title() ?></a>
		</div>
	</div>
</div>
<!-- Page info end -->
<section class="product-filter-section" style="padding-top: 30px;">
	<div class="container">
		<div class="section-title">
			<h2><?php the_title() ?></h2>
			<hr>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="news-item">
					<div class="pi-pic ">
						<?php the_post_thumbnail( 'news-main-img',  $size = array(1370,500), $attr = '' ) ?>
					</div>
					<div class="pi-text">
						<?php the_content() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer() ?>