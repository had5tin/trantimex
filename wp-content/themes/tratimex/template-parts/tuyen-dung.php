<?php
/*
Template name: Tin Tuyển Dụng
*/
get_header();
$news2 = new WP_Query([
    'post_type'=>'tuyen-dung',
]);
?>
<div id="san-pham" class="branch cover">
    <div class="item-1">
        <div class="center container">
            <div class="row heading">
                <div class="title">
                    <h2>Tin Tuyển Dụng</h2>
                    <hr>
                </div>
                <div class="product-list featured-news animatedParent">
                    <?php
                    while ($news2->have_posts()) {
                        $news2->the_post();
                        get_template_part('inc/tin-tuc/single');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
