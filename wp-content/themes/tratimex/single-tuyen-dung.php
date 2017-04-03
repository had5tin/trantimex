<?php
$categories = get_the_category();


get_header(); ?>

    <div id="tin-tuc" class="branch">
        <div class="item-1">
            <div class="center container">
                <div class="row heading">
                    <div class="title">
                        <h2><?php the_title();?></h2>
                        <hr>
                    </div>
                    <div class="content-page">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :   the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="item-1 item-other ">
            <div class="center container">
                <div class="row heading">
                    <div class="title">
                        <h2 style="font-size:23px;">Tin tuyển dụng khác</h2>

                    </div>
                    <div class="product-list featured-news">
                        <?php


                        $singlepost = new WP_Query([
                            'posts_per_page'=>3,
                            'post_type' => 'tuyen-dung',
                            'post__not_in' => array($post->ID)
                        ]);
                        while ($singlepost->have_posts()) {
                            $singlepost->the_post();
                            get_template_part('inc/tin-tuc/other');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
