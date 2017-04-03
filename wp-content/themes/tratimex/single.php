<?php
$categories = get_the_category();


get_header(); ?>

    <div id="tin-tuc" class="branch container">
        <div class="row">
            <div class="col-md-3">
                <div class="title">
                    <h2>Tin tức</h2>
                    <hr>
                </div>
                <div class="sidebar-left">
                    <ul class="item-list">
                        <li class="item active">
                            <a href="./tin-trong-nghanh/" class="active">Tin trong ngành</a>
                        </li>
                        <li class="item ">
                            <a href="./tin-tuc">Tin Statimex</a>
                        </li>
                        <li class="item ">
                            <a href="./tin-tuc-2/">Tất cả tin tức</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
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
<!--    <div class="item-1 item-other ">-->
<!--        <div class="center container">-->
<!--            <div class="row heading">-->
<!--                <div class="title">-->
<!--                    <h2 style="font-size:23px;">Tin tức liên quan</h2>-->
<!---->
<!--                </div>-->
<!--                <div class="product-list featured-news animatedParent">-->
<!--                    --><?php
//                    foreach ( $categories as $category ) {
//                        $cat_name[]=  $category->name ;
//                    }
//                    $current=$cat_name[0];
//
//                    $singlepost = new WP_Query([
//                        'posts_per_page'=>3,
//                        'category_name' => $current,
//                        'post__not_in' => array($post->ID)
//                    ]);
//                    while ($singlepost->have_posts()) {
//                        $singlepost->the_post();
//                        get_template_part('inc/tin-tuc/other');
//                    }
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<?php
get_footer();
