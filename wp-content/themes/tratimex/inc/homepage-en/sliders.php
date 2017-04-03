<?php
$slider = new WP_Query([
    'post_type'=>'slider',
]);
?>
<div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
    <?php
    if( $slider->have_posts() ) {
    while( $slider->have_posts() ) : $slider->the_post();
        ?>
        <div data-thumb=" <?php the_post_thumbnail_url( 'full' ); ?> " data-src="<?php the_post_thumbnail_url( 'full' ); ?>">
            <div class="camera_caption fadeFromBottom">
                <?php the_excerpt() ?>
            </div>
        </div>
        <?php
    endwhile;
    }
    ?>
</div>
