<?php
/*
Template Name: Главная
*/
?>
<?php get_header( ) ?>
<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<?php 

			$posts = get_posts( array(
				'numberposts' => 0,
				'category_name' => 'slider',
				'orderby'     => 'date',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => '',
				'meta_value'  =>'',
				'post_type'   => 'post',
				'suppress_filters' => true,
			) );
			foreach( $posts as $post ){
				setup_postdata($post);
				$slider_url = get_field('slider_img');
		?>
		<div class="hs-item set-bg" data-setbg="<?php echo $slider_url['url']; ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-7 text-black slider_text">
						<h2><?php the_title() ?></h2>
						<?php the_content() ?>
					</div>
				</div>
			</div>
		</div>
		<?php }
					wp_reset_postdata();
		?>
	</div>
	<div class="container">
		<div class="slide-num-holder" id="snh-1"></div>
	</div>
</section>
<!-- Hero section end -->
<!-- Product filter section -->
<section class="product-filter-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/gnss"><img src="<?php bloginfo('template_directory') ?>/img/catalog/1.GNSS/s660.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/gnss">GNSS</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/controllers"><img src="<?php bloginfo('template_directory') ?>/img/catalog/2.Controllers/H3 plus.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/controllers">Полевые контроллеры</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/tachymeters"><img src="<?php bloginfo('template_directory') ?>/img/catalog/3.Taheometr/nts-372r.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/tachymeters">Тахеометры</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/bpla"><img src="<?php bloginfo('template_directory') ?>/img/catalog/4.BPLA/X41.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/bpla">БПЛА</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/levels"><img src="<?php bloginfo('template_directory') ?>/img/catalog/6.Nivelir/NL32.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/levels">Нивелиры</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/scanners"><img
						src="<?php bloginfo('template_directory') ?>/img/catalog/5.3D/faro focus 3d.jpg" style="height: 160px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/scanners">3D-сканеры</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/theodolites"><img src="<?php bloginfo('template_directory') ?>/img/catalog/7.Theodolit/ET.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/theodolites">Теодолиты</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/rangefinders"><img src="<?php bloginfo('template_directory') ?>/img/catalog/8.Laser dalnomer/GLM250VF.jpg" alt="" style="height: 160px;
						margin-left: 18px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/rangefinders">Лазерные дальномеры</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/accessories/"><img src="<?php bloginfo('template_directory') ?>/img/catalog/11.Accessories/tripods/ATS-MP3.jpg"
						alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/accessories/">Аксессуары</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/fathometrs"><img src="<?php bloginfo('template_directory') ?>/img/catalog/12.Echo/SDE-28.jpg" alt=""></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/fathometrs">Эхолоты</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/trackfinders"><img src="<?php bloginfo('template_directory') ?>/img/catalog/13.Trackfinder/radiodetection rd7000.jpg"
						alt="" style="height: 160px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/trackfinders">Трассоискатели</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/laserlevels"><img src="<?php bloginfo('template_directory') ?>/img/catalog/9.Laser nivelir/GLL2-80P.jpg" alt="" style="height: 160px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/laserlevels">Лазерные нивелиры</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/rcs"><img
						src="<?php bloginfo('template_directory') ?>/img/catalog/14.Techique control system/Webp.net-resizeimage.jpg" alt="" style="height: 160px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/rcs">Системы управления дорожной техникой</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/taxonomy"><img
						src="<?php bloginfo('template_directory') ?>/img/catalog/15.Taxation/haglof mantax.jpg" style="height: 160px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/taxonomy">Таксация</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<a href="/category/programms"><img
						src="<?php bloginfo('template_directory') ?>/img/catalog/10.Soft/software-agility.png" style="height: 160px;"></a>
					</div>
					<div class="pi-text text-center">
						<a href="/category/programms">ПО</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="product-filter-section" style="padding-bottom: 0px;">
		<div class="container">
			<div class="section-title">
				<h2>НОВОСТИ</h2>
			</div>
			<div class="container">
				<hr>
			</div>
			<div class="row">
				<?php // параметры по умолчанию
							$posts = get_posts( array(
								'numberposts' => 3,
								'category_name' => 'news',
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
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<a href="<?php the_permalink() ?>">
							<div class="pi-pic image-hover">
								<?php the_post_thumbnail( 'news-preview', $attr = '' ) ?>
								<p>Подробнее</p>
							</div>
						</a>
						<a  href="<?php the_permalink() ?>" >
							<div class="pi-text text-black" >
								<?php the_title() ?>

							</div>
						</a>
					</div>
				</div> <?php }
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<div class="container text-right all-news">
		<a href="/news">
			Остальные новости
		</a>
	</div>
	<!-- Product filter section end -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>О компании</h2>
				<hr>
			</div>
			<div class="container about_inner-text">
				<?php the_content( ) ?>
			</div>
		</div>
	</section>
	<!-- Footer section -->
	<?php get_footer(  ) ?>