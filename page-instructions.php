<?php
/*
Template Name: Инструкции
Template Post Type: post;
*/
?>
<?php get_header(  ) ?>
<div class="page-top-info">
    <div class="container">
        <h4><?php the_title() ?></h4>
        <div class="site-pagination">
            <em><a href="/">Главная</a> / <a href="/service">Сервис</a> / <a href=""><?php the_title() ?></a></em>
        </div>
    </div>
</div>
<section class="product-filter-section">
    <div class="container">
        <div class="section-title" style="padding-top: 30px;">
            <h2><?php the_title() ?></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php // параметры по умолчанию
                    $posts = get_posts( array(
                    'numberposts' => 0,
                    'category_name' => 'instruction-files',
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
                    <div class="col-lg-2 col-sm-6">
                        <span><img src="<?php bloginfo('template_directory')?>/img/iconfinder_pdf-01_3079281.png"><a href="<?php the_field('inst_download_link') ?>" ><?php the_title()?></a></span>
                    </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer(  ) ?>