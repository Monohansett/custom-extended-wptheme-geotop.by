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
            <div class="section-title" style="padding-top: 30px; ">  
                <h2 style="font-weight:normal"><?php the_title() ?></h2>
            </div>

        <?php

            

            $parent_id = 26;
            $sub_cats = get_categories( array(
                'child_of' => $parent_id,
                'hide_empty' => 0
            ) );
            if( $sub_cats ){
                foreach( $sub_cats as $cat ){
                    ?>
                        <h3 class="instruction-title"><?php echo $cat->name ?></h3>
                    <?php

                    # получаем записи из рубрики
                    $myposts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => $cat->cat_ID,
                        'orderby'     => 'post_date',
                        'order'       => 'DESC',
                    ) );
                    # выводим записи
                    global $post;
                    foreach($myposts as $post){
                        setup_postdata($post);
                        $instr_link = get_field('instr_link');
                        $instr_link_2 = get_field('instr_link_2');
                        $instr_link_3 = get_field('instr_link_3');
                        ?> 
                        <div id="accordion" class="accordion-area accord-instruction">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link" data-toggle="collapse" data-target="<?php echo '#' . 'collapse' . $post->ID ?>"
                                    aria-expanded="true" aria-controls="<?php echo 'collapse' . $post->ID ?>"><?php echo the_title()    ?></button>
                                </div>
                                <div id="<?php echo 'collapse' . $post->ID ?>" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="panel-body">
                                        <a href="<?php echo the_field('instr_link') ?>">
                                            <?php echo the_field('instr_title') ?>
                                        </a> <br>
                                        <a href="<?php echo the_field('instr_link_2') ?>">
                                            <?php echo the_field('instr_title_2') ?>
                                        </a> <br>
                                        <a href="<?php echo the_field('instr_link_3') ?>">
                                            <?php echo the_field('instr_title_3') ?>
                                        </a> <br>
                                        <a href="<?php the_field('instr_link_4') ?>">
                                            <?php echo the_field('instr_title_4') ?>
                                        </a> <br>
                                        <a href="<?php the_field('instr_link_5') ?>">
                                            <?php echo the_field('instr_title_5') ?>
                                        </a>		
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }

                wp_reset_postdata(); 
            } 
            ?>
    </div>
</section>

<?php get_footer(  ) ?>