<?php
$news = new WP_Query([
    'posts_per_page'    =>      4
]);

$counter = 0;
?>
<div class="container">
    <div class="row">
<!--        <h2>tin tức</h2>-->
        <hr>
        <?php
        if( $news->have_posts() ) {
            while( $news->have_posts() ) : $news->the_post();$counter ++;
                if($counter % 2 == 1) {
                    $flag = 'fadeInLeft';
                } else {
                    $flag = 'fadeInRight';
                }
                ?>
                <div class="col-md-6 item-news <?php echo $flag; ?>" data-id="<?php the_ID() ?>">
                    <div class="wrap">
                        <?php the_post_thumbnail('full') ?>
                        <span class="overlay"></span>
                        <div class="text">
                            <div class="title">
                                <?php the_title(); ?>
                            </div>
                            <div class="excerpt"><?php the_excerpt() ?></div>
                            <div class="btn-more">
                                <a href="<?php the_permalink() ?>" class="more fa-arrow-circle-o-right">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        }
        ?>
    </div>
</div>
