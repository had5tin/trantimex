<?php
/*
Template name: Tin tuc
*/
get_header();
$news = new WP_Query([
    'category_name' => 'Tin Tratimex, Tin Trong Ngành',
]);
?>
<!--<div id="tin-tuc" class="branch cover">-->
<!--    <div class="item-1">-->
<!--        <div class="center container">-->
<!--            <div class="row heading">-->
<!--                <div class="title">-->
<!--                    <h2>Tin tức</h2>-->
<!--                    <hr>-->
<!--                </div>-->
<!--                <div class="col-sm-6 col-xs-12 animatedParent">-->
<!--                    <div class="tin tin-tratimex animated bounceInLeft ">-->
<!--                       <div class="bg">-->
<!--                           <div class="mini-box  ">-->
<!--                               <h3>Tin Tratimex</h3>-->
<!--                               <p style="font-size:18px;">Các tin tức cập nhật nhất của Tratimex</p>-->
<!--                               <button type="button" class="btn btn-info btn-lg"><a class="btn" href="./tin-tuc/">Xem thêm</a></button>-->
<!--                           </div>-->
<!--                       </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-6 col-xs-12 animatedParent">-->
<!--                    <div class="tin tin-nganh  animated bounceInLeft ">-->
<!--                        <div class="bg">-->
<!--                            <div class="mini-box ">-->
<!--                                <h3>Tin Trong Ngành</h3>-->
<!--                                <p style="font-size:18px;">Tổng hợp các tin tức thời sự nóng hổi trong ngành</p>-->
<!--                                <button type="button" class="btn btn-info btn-lg"><a class="btn" href="./tin-trong-nghanh/">Xem thêm</a></button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="item-1 item-other  bg-other">-->
<!--        <div class="center container">-->
<!--            <div class="row heading">-->
<!--                <div class="title">-->
<!--                    <h2 style="font-size: 25px;px;">Tin tức nổi bật</h2>-->
<!--                    <hr>-->
<!--                </div>-->
<!--                <div class="product-list featured-news animatedParent">-->
<!--                    --><?php
//                    while ($news->have_posts()) {
//                        $news->the_post();
//                        get_template_part('inc/tin-tuc/single');
//                    }
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div id="news" class="container">
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
                <li class="item">
                    <a href="./tin-tuc">Tin Statimex</a>
                <li class="item active">
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
