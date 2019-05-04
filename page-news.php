<?php
/*
Template Name: Новости
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
<!-- Page info end -->
<section class="product-filter-section" style="padding-top: 50px;">
    <div class="container">
        <div class="section-title">
            <h2><?php the_title() ?></h2>
            <hr>
        </div>
        <div class="row">
            <?php // параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 0,
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
                    <a href="<?php the_permalink() ?>">
                        <div class="pi-text">
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
<?php get_footer() ?>