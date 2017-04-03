<?php
$service = new WP_Query([
    'post_type'         =>      'sanpham'
]);
?>
<div class="container">
    <div class="rows">
<!--        <h2>Products</h2>-->
        <hr>
        <div class="owl-carousel owl-theme">
        <?php
        if( $service->have_posts() ) {
            while( $service->have_posts() ) : $service->the_post();
                ?>
                <div class="item" data-id="<?php the_ID() ?>">
                    <div class="thumbnail-service">
                        <div class="wrap">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="content">
                        <div class="title">
                            <?php the_title() ?>
                        </div>
                        <div class="excerpt">
                            <?php echo get_post_meta( get_the_ID(), '__desc', true ) ?>
                        </div>
                        <div class="btn-more">
                            <a href="<?php the_permalink() ?>">more</a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        }
        ?>
        </div>
    </div>
</div>
