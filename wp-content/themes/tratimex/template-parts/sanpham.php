<?php
/*
Template name: San Pham
*/
get_header();
$product = new WP_Query([
    'post_type'=>'sanpham',
    'category_name' => 'Dầu Diesel',
]);
$product1 = new WP_Query([
    'post_type'=>'sanpham',
    'category_name' => 'Nhựa đường đặc nóng',
]);
$product2 = new WP_Query([
    'post_type'=>'sanpham',
    'category_name' => 'Nhựa đường phuy',
]);
?>
<div id="san-pham" class="branch cover" >
    <div class="item-1">
        <div class="center container">
            <div class="row heading">
                <div class="title">
                    <h2 class="h2">Sản phẩm</h2>
                    <hr>
                    <h4 class="h4">
                        Công ty cổ phần thương mại và XNK vật tư giao thông (Tratimex)
                    </h4>
                    <p class="para-1">
                        Công ty cổ phần thương mại và XNK vật tư giao thông (TRATIMEX) chuyên nhập khẩu và kinh doanh nhựa đường, xăng dầu và các sản phẩm hóa dầu.
                    </p>
                </div>
            </div>
            <div class="product-list">


                <?php
                while ($product2->have_posts()) {
                    $product2->the_post();
                    get_template_part('inc/san-pham/single');
                }
                ?>
                <?php
                while ($product1->have_posts()) {
                    $product1->the_post();
                    get_template_part('inc/san-pham/single');
                }
                ?>
                <?php
                while ($product->have_posts()) {
                    $product->the_post();
                    get_template_part('inc/san-pham/single');
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>