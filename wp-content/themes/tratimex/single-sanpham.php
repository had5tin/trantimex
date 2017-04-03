<?php get_header();?>
<div class="branch">
    <div class="item-1" style="margin-bottom:50px;">
        <div class="center container">
            <div class="row heading">
                <div class="title">
                    <h2><?php the_title();?></h2>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
<section id="single-sanpham" >
    <div class="container">
        <div class="col-sm-6 col-xs-12">
            <div class="thumb">
                <?php the_post_thumbnail();?>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="info">
                <div class="mo-ta">
                    <h3 style="margin-top:0;"> Mô tả</h3>
                    <div class="mo-ta-con">
                        <?php
                        $mota = get_post_meta( get_the_ID(), '__mo_ta', true );
                        echo $mota;
                        ?>
                    </div>
                </div>
                <div class="middle-div"><a class="cont" href="/lien-he">Liên hệ</a></div>
                <div class="thong-so">
                    <div class="thong-so-san-pham">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thông số</button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog" style="display: none;">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal">×</button>

                                    <div class="info">
                                        <?php
                                        $tskt = get_post_meta( get_the_ID(), '__thong_so_kt', true );
                                        echo $tskt;
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div id="tin-tuc" class="branch">
    <div class="item-1 item-other ">
        <div class="center container">
            <hr>
            <div class="row heading">

                <div class="title">

                    <h2 style="font-size:23px;">Các sản phẩm khác</h2>

                </div>
                <div class="product-list featured-news animatedParent">
                    <?php

                    $singlepost = new WP_Query([
                        'post_type'=>'sanpham',
                        'posts_per_page'=>4,
                        'post__not_in' => array($post->ID)
                    ]);
                    while ($singlepost->have_posts()) {
                        $singlepost->the_post();
                        get_template_part('inc/tin-tuc/other');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php get_footer();?>




