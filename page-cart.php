<?php
/*
Template Name: Корзина
*/
?>
<?php get_header( ) ?>
<div class="page-top-info">
	<div class="container">
		<h4><?php the_title() ?></h4>
		<div class="site-pagination">
			<em><a href="/">Главная</a> / <a href=""><?php the_title() ?></a></em>
		</div>
	</div>
</div>
<section class="cart-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="cart-table">
					<h3>Ваша корзина</h3>
					<div class="cart-table-warp">
						<table>
							<thead>
								<tr>
									<th class="product-th">Наименование</th>
									<th class="quy-th">Кол-во</th>
									<th class="total-th">Цена</th>
									<th class="size-th"></th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					<div class="total-cost">
						<h6>Total <span>$99.90</span></h6>
					</div>
				</div>
			</div>
			<div class="col-lg-4 card-right">
				<form class="contact-form">
					<input id="company_name" type="text" placeholder="Наименование организации">
					<input id="payment_reqs" type="text" placeholder="Реквизиты оплаты">
					<input id="phone" type="phone" placeholder="Телефон" required>
					<textarea placeholder="Дополнительная информация"></textarea>
					<button class="site-btn">Оформить</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php get_footer( ) ?>