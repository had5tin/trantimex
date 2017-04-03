<?php
/*
Template name: Trang chủ
*/
get_header();
?>
    <div class="main-homepage">
        <div class="part-1 sliders">
           <?php get_template_part('inc/homepage/sliders') ?>
            <div class="end"></div>
        </div>
        <div class="part-2 services">
            <?php get_template_part('inc/homepage/services') ?>
        </div>
        <div class="part-3 news">
            <?php get_template_part('inc/homepage/news') ?>
        </div>
        <div class="part-4 products">
            <?php get_template_part('inc/homepage/products') ?>
        </div>
        <div class="part-5 customers">
            <?php get_template_part('inc/homepage/customers') ?>
        </div>
<!--        <div class="part-6 contact">-->
<!--            --><?php //get_template_part('inc/homepage/contact') ?>
<!--        </div>-->
    </div>
<?php get_footer();?>