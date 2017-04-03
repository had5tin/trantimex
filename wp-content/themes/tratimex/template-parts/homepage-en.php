<?php
/*
Template name: Homepage
*/
get_header();
?>
    <div class="main-homepage">
        <div class="part-1 sliders">
            <?php get_template_part('inc/homepage-en/sliders') ?>
            <div class="end"></div>
        </div>
        <div class="part-2 services">
            <?php get_template_part('inc/homepage-en/services') ?>
        </div>
        <div class="part-3 news">
            <?php get_template_part('inc/homepage-en/news') ?>
        </div>
        <div class="part-4 products">
            <?php get_template_part('inc/homepage-en/products') ?>
        </div>
        <div class="part-5 customers">
            <?php get_template_part('inc/homepage-en/customers') ?>
        </div>
        <div class="part-6 contact">
            <?php get_template_part('inc/homepage-en/contact') ?>
        </div>
    </div>
<?php get_footer();?>