<section class="footer-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4">
				<div class="footer-widget about-widget">
					<h2>Copyright &copy; <?php echo date(Y) ?></h2>
					<p><?php the_field('description', 22) ?></p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-5">
				<div class="footer-widget about-widget">
					<h2>Навигация по сайту</h2>
					<ul>
						<?php $args = array(
						'depth'        => 0,
						// 'show_date'    => '',
						// 'date_format'  => get_option('date_format'),
						'child_of'     => 0,
						'exclude'      => '',
						'exclude_tree' => '',
						'include'      => '47,55,51,53',
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
					<ul>
						<li><a href="/catalog">Каталог</a></li>
						<li><a href="/stocks">Акции</a></li>
						<li><a href="/price">Цены</a></li>
						<li><a href="/service">Сервис</a></li>
						<li><a href="/contacts">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-3">
				<div class="footer-widget contact-widget">
					<h2>Контакты</h2>
					<div class="con-info">
						<!-- <span>B.</span> -->
						<p><?php the_field('zip_code', 22) ?></p>
						<p><?php the_field('address', 22) ?></p>
					</div>
					<div class="con-info">
						<!-- <span>T.</span> -->
						<p><?php the_field('work_phone', 22) ?></p>
					</div>
					<div class="con-info">
						<!-- <span>E.</span> -->
						<p><?php the_field('email', 22) ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="social-links-warp">
		<div class="container">
			<div class="social-links">
				<a href="<?php the_field('vk', 22); ?>" class="vk"><i class="fa fa-vk"></i><span>vk</span></a>
				<a href="<?php the_field('fb', 22); ?>" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
				<a href="<?php the_field('insta', 22);	 ?>" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
				<!-- <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a> -->
				<!-- <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a> -->
				<!-- <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a> -->
				<!-- <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a> -->
				<!-- <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a> -->
			</div>
		</div>
	</div>
</section>
<!-- Footer section end -->
<?php wp_footer() ?>
</body>
</html>