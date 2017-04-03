<?php
/*
Template name: Tin Tratimex
*/
get_header();
$news = new WP_Query([
    'category_name' => 'Tin Tratimex',
]);
?>
<div id="tin-tuc" class="branch cover container" >
    <div class="row">
        <div class="col-md-3">
            <div class="title">
                <h2>Tin tức</h2>
                <hr>
            </div>
            <div class="sidebar-left">
                <ul class="item-list">
                    <li class="item">
                        <a href="./tin-trong-nghanh/" class="active">Tin trong ngành</a>
                    </li>
                    <li class="item active">
                        <a href="./tin-tuc">Tin Statimex</a>
                    <li class="item ">
                        <a href="./tin-tuc-2/">Tất cả tin tức</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="product-list featured-news animatedParent">
                <?php
                while ($news->have_posts()) {
                    $news->the_post();
                    get_template_part('inc/tin-tuc/single');
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
