<!--<div class="col-sm-3 col-xs-12">-->
<!--    <a href="--><?php //the_permalink();?><!--" title="--><?php //the_title();?><!--">-->
<!--        <div class="thumb">-->
<!--            --><?php //the_post_thumbnail();?>
<!--        </div>-->
<!--        <h2>--><?php // echo wp_trim_words( get_the_title(), 7, '...' );?><!--</h2>-->
<!--    </a>-->
<!---->
<!---->
<!--</div>-->

<div class="col-md-12">
    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
        <h2 class="title-posts"><?php  echo wp_trim_words( get_the_title(), 7, '...' );?></h2>
        <div class="thumb row">
            <div class="col-md-2">
                <?php the_post_thumbnail();?>
            </div>
        </div>
        <div class="row">
            <div class="desc col-md-12">
                <?php
                echo wp_trim_words( get_the_content(), 10, '...' );
                ?>
            </div>
        </div>
    </a>


</div>