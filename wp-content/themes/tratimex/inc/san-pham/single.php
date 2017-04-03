<div class="col-sm-4 col-xs-12">
    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
        <div class="thumb">
            <div class="img" style="background-image:url(<?php the_post_thumbnail_url();?>)">
                <span class="spantest"><?php
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }
                    ?></span>

            </div>
        </div>
        <h3 class="h3"><?php the_title();?></h3>
        <div class="desc">
            <?php
            $desc = get_post_meta( get_the_ID(), '__desc', true );
            echo $desc;
            ?>
        </div>
    </a>


</div>