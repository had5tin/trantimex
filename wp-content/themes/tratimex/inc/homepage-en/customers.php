<?php
$customer = new WP_Query([
    'post_type'         =>      'khach-hang',
    'posts_per_page'    =>      5
]);
?>
<div class="container">
    <div class="row">
        <ul class="list-inline">
        <?php
        if( $customer->have_posts() ) {
            while( $customer->have_posts() ) : $customer->the_post();
                ?>
                    <li><?php the_post_thumbnail('full') ?></li>
                <?php
            endwhile;
        }
        ?>
        </ul>
    </div>
</div>
