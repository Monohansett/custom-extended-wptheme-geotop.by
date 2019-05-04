<?php
/*
Template Name: О компании
*/
?>

<?php get_header() ?>

<div class="page-top-info">
        <div class="container">
            <h4><?php the_title() ?></h4>
            <div class="site-pagination">
                <em><a href="/">Главная / </a><a href=""><?php the_title() ?></a></em>
            </div>
        </div>
    </div>

    <section class="product-filter-section">
        <div class="container">
            <div class="section-title" style="padding-top: 30px;">
                <h2><?php the_title() ?></h2>
                <hr>
            </div>
            <div class="container about_inner-text">
               <?php the_content() ?>
            </div>
        </div>
    </section>

    <?php get_footer() ?>