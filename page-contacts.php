<?php
/*
Template Name: Контакты
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
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <h3>Связаться</h3>
                <p><?php the_field('zip_code', 22) ?></p>
                <p><?php the_field('address', 22) ?></p>
                <p><?php the_field('work_phone', 22) ?></p>
                <p> <?php the_field('email', 22) ?></p>
                <div class="contact-social">
                    <a href="<?php the_field('vk', 22) ?>"><i class="fa fa-vk"></i></a>
                    <a href="<?php the_field('fb', 22) ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php the_field('insta', 22) ?>"><i class="fa fa-instagram"></i></a>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="359" title="Форма заявки"]' ); ?>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe
        src="https://yandex.ru/map-widget/v1/?um=constructor%3A65f8c5414e35c927952cbf062f8e7cb00c1853d84edba34170224f83b42298ce&amp;source=constructor"
        width="500" height="400" frameborder="0"></iframe>
    </div>
</section>
<?php get_footer() ?>