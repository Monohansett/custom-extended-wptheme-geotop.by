<?php
/*
Template Name: Товар
Template Post Type: post;
*/
?>
<?php get_header() ?>
<?php
	$current_post_obj = get_post('', 'OBJECT', '');
	$post_data = json_encode((array)$current_post_obj);
	print_r($post_data);
	$current_post = get_queried_object();
	$current_post->ID;
	$main_image = get_field('product_img');
	$first_thumb = get_field('product_first_thumbnail');
	$second_thumb = get_field('product_second_thumbnail');
	$third_thumb = get_field('product_third_thumbnail');
	$fourth_thumb = get_field('product_fourth_thumbnail');
	$table = get_field('specifications');
	$instr = get_field('instruction_title');
	$techdoc = get_field('techdoc_title');
	
	$enable_price = get_field('enable_price', 37);
	$product_price = get_field('product_price');
?>
<div class="page-top-info">
	<div class="container">
		<h4><?php the_title(  ) ?></h4>
		<div class="site-pagination">
			<em><a href="/">Главная /</a> <a href="/catalog">Каталог / </a> <a href="/category"><?php echo the_category( ' / ' , 'multiple', $current_post->ID ) ?></a> / <a href=""><?php the_title(  ) ?></a></em>
		</div>
	</div>
</div>
<!-- Page info end -->
<!-- product section -->
<section class="product-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="product-pic-zoom">
					<img class="product-big-img" src="<?php  echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>">
				</div>
				<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
					<div class="product-thumbs-track">
						<div class="pt" data-imgbigurl="<?php  echo $main_image['url']; ?>">
							<img src="<?php  echo $main_image['url']; ?>" alt="">
						</div>
						<div class="pt" data-imgbigurl="<?php  echo $first_thumb['url']; ?>">
							<img src="<?php  echo $first_thumb['url']; ?>" alt="">
						</div>
						<div class="pt" data-imgbigurl="<?php  echo $second_thumb['url']; ?>">
							<img src="<?php  echo $second_thumb['url']; ?>" alt="">
						</div>
						<div class="pt" data-imgbigurl="<?php  echo $third_thumb['url']; ?>">
							<img src="<?php  echo $third_thumb['url']; ?>" alt="">
						</div>
						<div class="pt" data-imgbigurl="<?php  echo $fourth_thumb['url']; ?>">
							<img src="<?php  echo $fourth_thumb['url']; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 product-details" style="margin-left:50px;">
				<h2 class="p-title"><?php the_title() ?></h2>
				<?php if( $enable_price ): ?>
				<h5 class="p-title" style="font-weight: bold; padding-top:20px">
				
				<?php if(empty($product_price)) : ?>
				<?php else : ?>
				<?php echo $product_price . " BYN"  ?>
				<?php endif; ?>
				</h5>
				<?php endif; ?>
				<div id="accordion" class="accordion-area">
					<div class="panel">
						<div class="panel-header" id="headingOne">
							<button class="panel-link active" data-toggle="collapse" data-target="#collapse1"
							aria-expanded="true" aria-controls="collapse1">Описание</button>
						</div>
						<div id="collapse1" class="collapse show" aria-labelledby="headingOne"
							data-parent="#accordion">
							<div class="panel-body">
								<?php echo the_field('product_descr') ?>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-header" id="headingTwo">
							<button class="panel-link" data-toggle="collapse" data-target="#collapse2"
							aria-expanded="false" aria-controls="collapse2">Технические характеристики</button>
						</div>
						<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="panel-body">
								<?php echo $table ?>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-header" id="headingThree">
							<button class="panel-link" data-toggle="collapse" data-target="#collapse3"
							aria-expanded="false" aria-controls="collapse3">Файлы</button>
						</div>
						<div id="collapse3" class="collapse" aria-labelledby="headingThree"
							data-parent="#accordion">
							<div class="panel-body">
								<div class="container col-md-12">
									<div class="row">
										<?php if( empty($instr) && empty($techdoc) ): ?>
										
										<p>Документация отсутствует</p>
										
										<?php endif; ?>
										
										<?php if( empty($instr) ): ?>
										
										
										<?php else : ?>
										<div class="col-md-4">
											<span><img src="<?php bloginfo('template_directory')?>/img/iconfinder_pdf-01_3079281.png">
												<a href="<?php the_field('instruction_link') ?>">
													<?php echo the_field('instruction_title') ?>
												</a>
											</span>
										</div>
										
										<?php endif; ?>
										<?php if( empty($techdoc) ): ?>
										
										
										<?php else : ?>
										<div class="col-md-4">
											<span><img src="<?php bloginfo('template_directory')?>/img/iconfinder_pdf-01_3079281.png">
												<a href="<?php the_field('techdoc_link') ?>">
													<?php echo the_field('techdoc_title')?>
												</a>
											</span>
										</div>
										
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button class="site-btn add-to-cart_btn">Добавить в корзину</button>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	const postData = '<?php echo $post_data?>';
	const price = '<?php echo $product_price?>';
	const postObject = JSON.parse(postData);
	const postThumb = $('.product-big-img').attr('src');
	postObject.postThumb = postThumb;
	postObject.price = price;
	
	

</script>
<?php get_footer() ?>