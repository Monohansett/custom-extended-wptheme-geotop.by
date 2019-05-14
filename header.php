<!DOCTYPE html>
<head>
	<title>Геодезические приборы, ремонт, сервис - Геотоп</title>
	<meta charset="UTF-8">
	<meta name="description">
	<meta name="keywords">
	<meta name="viewport" content="width=device-width">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head() ?>
</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
				<div class="loader"></div>
	</div> -->
	<!-- Header section -->
	<header class="header-section">
		<div class="container-fluid bg_header">
			<div class="container">
				<div class="row">
					<ul class="top-header__menu col-lg-10">
						<?php $args = array(
						'depth'        => 0,
						// 'show_date'    => '',
						// 'date_format'  => get_option('date_format'),
						'child_of'     => 0,
						'exclude'      => '',
						'exclude_tree' => '',
						'include'      => '47,51,53,18',
						'title_li'     => NULL,
						'echo'         => 1,
						'authors'      => '',
						'sort_column'  => 'menu_order',
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
					<div class="col-lg-2 text-right">
						<div class="shop-panel">
							
							<div class="up-item">
								<div class=" go-to-cart_block">
									<i class="flaticon-shopping-cart"></i>
									<span>0</span>
								</div>
								<a href="/cart">Корзина</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-auto col-md-auto text-center text-lg-left">
						<a href="/" class="site-logo">
							<img src="<?php bloginfo('template_directory') ?>/img/logo1.png" alt="">
						</a>
					</div>
					<div class="col-lg-auto col-md-auto contacts">
						<span class="contacts-item"><a href="tel: <?php the_field('tel_fax_link', 37) ?>"><?php the_field('tel_fax', 37) ?></a></span>
						<span class="contacts-item"><a href="tel: <?php the_field('tel_mob_link', 37) ?>"><?php the_field('tel_mob', 37) ?></a></span>
						<span class="contacts-item"><a href="mailto: info@geotop.by ?>">info@geotop.by</a></span>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar" style="background: #403c3c;">
			<div class="container-fluid">
				<div class="container">
					<!-- menu -->
					<ul class="main-menu">
						<li><a href="/catalog">Каталог</a>
						<?php get_sidebar( 'catalog' ) ?>
					</li>
					<li><a href="/stocks">Акции</a></li>
					<li><a href="/rent">Аренда</a></li>
					<li><a href="/service">Сервис</a>
					<?php get_sidebar( 'service' ) ?>
				</li>
				<li><a href="/contacts">Контакты</a></li>
			</ul>
			
		</div>
	</div>
</nav>
</header>