<?php
$service = new WP_Query([
    'post_type'         =>      'dich-vu',
    'posts_per_page'    =>      3
]);
?>
<div class="container">
    <div class="row">
        <?php
        if( $service->have_posts() ) {
            while( $service->have_posts() ) : $service->the_post();
                ?>
                <div class="col-md-4 item" data-id="<?php the_ID() ?>">
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
                            <?php the_excerpt() ?>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        }
        ?>
    </div>
</div>
