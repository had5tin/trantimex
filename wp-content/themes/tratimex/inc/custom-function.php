<?php
/**
 * Enqueue scripts and styles.
 */
function cmax_scripts_custom() {
    // Style
    wp_enqueue_style( 'bootstrap-style',get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

    wp_enqueue_style( 'cmax-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'owl-carousel',get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'Roboto-font', '//fonts.googleapis.com/css?family=Roboto:400,500,700,900', array() );
    wp_enqueue_style( 'camera-style',get_template_directory_uri() . '/assets/css/camera.css' );
    wp_enqueue_style( 'cmax-style',get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_style( 'animations-style',get_template_directory_uri() . '/assets/css/animations.css' );

    wp_enqueue_style( 'animation-style',get_template_directory_uri() . '/assets/css/animation.css' );

    wp_enqueue_script( 'cmax-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'cmax-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '20151215', true );
    wp_enqueue_script( 'cmax-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '20151215', true );
    wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), '20151215', true );
    wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), '20151215', true );
    wp_enqueue_script( 'camera-js', get_template_directory_uri() . '/assets/js/camera.min.js', array(), '20151215', true );
    wp_enqueue_script( 'cmax-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '20151216', true );
    wp_enqueue_script( 'vertical-timeline-js', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '20151215', true );
    wp_enqueue_script( 'vertical-timeline-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
    wp_enqueue_script( 'animate-js', get_template_directory_uri() . '/assets/js/css3-animate-it.js', array(), '20151215', true );
    wp_enqueue_script( 'cmax-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '20151214', true );

    //minhpt 02/04/2017
    wp_enqueue_style( 'cmax-custom-style',get_template_directory_uri() . '/assets/css/custom-themes.css' );
    wp_enqueue_script( 'custom-themes-js', get_template_directory_uri() . '/assets/js/custom-themes.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'cmax_scripts_custom' );

if( !function_exists('tratimex_post_type_dichvu') ) {

    function tratimex_post_type_dichvu()
    {


        $label = array(
            'name' => 'Dịch vụ',
            'add_new'   => __( 'Thêm dịch vụ' ),
            'edit_item' => __( 'Sửa dịch vụ' ),
        );


        $args = array(
            'labels' => $label, //Gï¿½?i cÃ¡c label trong biáº¿n $label á»Ÿ trÃªn
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'trackbacks',
            ), //CÃ¡c tÃ­nh nÄƒng Ä‘Æ°á»£c há»— trá»£ trong post type
            'taxonomies' => array( 'category', 'post_tag' ), //CÃ¡c taxonomy Ä‘Æ°á»£c phÃ©p sá»­ dá»¥ng Ä‘á»ƒ phÃ¢n loáº¡i ná»™i dung
            'hierarchical' => false, //Cho phÃ©p phÃ¢n cáº¥p, náº¿u lÃ  false thÃ¬ post type nÃ y giá»‘ng nhÆ° Post, true thÃ¬ giá»‘ng nhÆ° Page
            'public' => true, //KÃ­ch hoáº¡t post type
            'has_archive' => true, //Cho phÃ©p lÆ°u trá»¯ (month, date, year)
        );

        register_post_type('dich-vu', $args); //Táº¡o post type vá»›i slug tÃªn lÃ  sanpham vÃ  cÃ¡c tham sá»‘ trong biáº¿n $args á»Ÿ trÃªn

    }
    /* KÃ­ch hoáº¡t hÃ m táº¡o custom post type */
    add_action('init', 'tratimex_post_type_dichvu');
}
if( !function_exists('tratimex_post_type_tuyen_dung') ) {

    function tratimex_post_type_tuyen_dung()
    {


        $label = array(
            'name' => 'Tin tuyển dụng',
            'add_new'   => __( 'Thêm tin' ),
            'edit_item' => __( 'Sửa tin' ),
        );


        $args = array(
            'labels' => $label, //Gï¿½?i cÃ¡c label trong biáº¿n $label á»Ÿ trÃªn
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'trackbacks',
            ), //CÃ¡c tÃ­nh nÄƒng Ä‘Æ°á»£c há»— trá»£ trong post type
            'taxonomies' => array( 'category', 'post_tag' ), //CÃ¡c taxonomy Ä‘Æ°á»£c phÃ©p sá»­ dá»¥ng Ä‘á»ƒ phÃ¢n loáº¡i ná»™i dung
            'hierarchical' => false, //Cho phÃ©p phÃ¢n cáº¥p, náº¿u lÃ  false thÃ¬ post type nÃ y giá»‘ng nhÆ° Post, true thÃ¬ giá»‘ng nhÆ° Page
            'public' => true, //KÃ­ch hoáº¡t post type
            'has_archive' => true, //Cho phÃ©p lÆ°u trá»¯ (month, date, year)
        );

        register_post_type('tuyen-dung', $args); //Táº¡o post type vá»›i slug tÃªn lÃ  sanpham vÃ  cÃ¡c tham sá»‘ trong biáº¿n $args á»Ÿ trÃªn

    }
    /* KÃ­ch hoáº¡t hÃ m táº¡o custom post type */
    add_action('init', 'tratimex_post_type_tuyen_dung');
}

if( !function_exists('tratimex_post_type_sanpham') ) {

    function tratimex_post_type_sanpham()
    {


        $label = array(
            'name' => 'Sản Phẩm',
            'add_new'   => __( 'Thêm Sản Phẩm' ),
            'edit_item' => __( 'Sửa Sản Phẩm' ),
        );


        $args = array(
            'labels' => $label, //Gï¿½?i cÃ¡c label trong biáº¿n $label á»Ÿ trÃªn
            'supports' => array(
                'title',
                'thumbnail',
            ), //CÃ¡c tÃ­nh nÄƒng Ä‘Æ°á»£c há»— trá»£ trong post type
            'taxonomies' => array( 'category', 'post_tag' ), //CÃ¡c taxonomy Ä‘Æ°á»£c phÃ©p sá»­ dá»¥ng Ä‘á»ƒ phÃ¢n loáº¡i ná»™i dung
            'hierarchical' => false, //Cho phÃ©p phÃ¢n cáº¥p, náº¿u lÃ  false thÃ¬ post type nÃ y giá»‘ng nhÆ° Post, true thÃ¬ giá»‘ng nhÆ° Page
            'public' => true, //KÃ­ch hoáº¡t post type
            'has_archive' => true, //Cho phÃ©p lÆ°u trá»¯ (month, date, year)
            'register_meta_box_cb' => '__san_pham_meta',
        );

        register_post_type('sanpham', $args); //Táº¡o post type vá»›i slug tÃªn lÃ  sanpham vÃ  cÃ¡c tham sá»‘ trong biáº¿n $args á»Ÿ trÃªn

    }
    /* KÃ­ch hoáº¡t hÃ m táº¡o custom post type */
    add_action('init', 'tratimex_post_type_sanpham');
}

if( !function_exists('tratimex_post_type_du_an') ) {

    function tratimex_post_type_du_an()
    {


        $label = array(
            'name' => 'Dự án',
            'add_new'   => __( 'Thêm Dự Án' ),
            'edit_item' => __( 'Sửa Dự Án' ),
        );


        $args = array(
            'labels' => $label, //Gï¿½?i cÃ¡c label trong biáº¿n $label á»Ÿ trÃªn
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'trackbacks',
            ), //CÃ¡c tÃ­nh nÄƒng Ä‘Æ°á»£c há»— trá»£ trong post type
            'taxonomies' => array( 'category', 'post_tag' ), //CÃ¡c taxonomy Ä‘Æ°á»£c phÃ©p sá»­ dá»¥ng Ä‘á»ƒ phÃ¢n loáº¡i ná»™i dung
            'hierarchical' => false, //Cho phÃ©p phÃ¢n cáº¥p, náº¿u lÃ  false thÃ¬ post type nÃ y giá»‘ng nhÆ° Post, true thÃ¬ giá»‘ng nhÆ° Page
            'public' => true, //KÃ­ch hoáº¡t post type
            'has_archive' => true, //Cho phÃ©p lÆ°u trá»¯ (month, date, year)
        );

        register_post_type('du-an', $args); //Táº¡o post type vá»›i slug tÃªn lÃ  sanpham vÃ  cÃ¡c tham sá»‘ trong biáº¿n $args á»Ÿ trÃªn

    }
    /* KÃ­ch hoáº¡t hÃ m táº¡o custom post type */
    add_action('init', 'tratimex_post_type_du_an');
}

if( !function_exists('tratimex_post_type_khach_hang') ) {

    function tratimex_post_type_khach_hang()
    {


        $label = array(
            'name' => 'Khách hàng',
            'add_new'   => __( 'Thêm Khách hàng' ),
            'edit_item' => __( 'Sửa Khách hàng' ),
        );


        $args = array(
            'labels' => $label, //Gï¿½?i cÃ¡c label trong biáº¿n $label á»Ÿ trÃªn
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'trackbacks',
            ), //CÃ¡c tÃ­nh nÄƒng Ä‘Æ°á»£c há»— trá»£ trong post type
            'taxonomies' => array( 'category', 'post_tag' ), //CÃ¡c taxonomy Ä‘Æ°á»£c phÃ©p sá»­ dá»¥ng Ä‘á»ƒ phÃ¢n loáº¡i ná»™i dung
            'hierarchical' => false, //Cho phÃ©p phÃ¢n cáº¥p, náº¿u lÃ  false thÃ¬ post type nÃ y giá»‘ng nhÆ° Post, true thÃ¬ giá»‘ng nhÆ° Page
            'public' => true, //KÃ­ch hoáº¡t post type
            'has_archive' => true, //Cho phÃ©p lÆ°u trá»¯ (month, date, year)
        );

        register_post_type('khach-hang', $args); //Táº¡o post type vá»›i slug tÃªn lÃ  sanpham vÃ  cÃ¡c tham sá»‘ trong biáº¿n $args á»Ÿ trÃªn

    }
    /* KÃ­ch hoáº¡t hÃ m táº¡o custom post type */
    add_action('init', 'tratimex_post_type_khach_hang');
}

function __san_pham_meta(){
    function __desc()
    {
        ?>
        <label for="__desc"><b>Giới thiệu sản phẩm</b></label>
        <br>
        <textarea name="__desc" id="__desc" cols="100" rows="10"><?php echo get_post_meta(get_the_ID(), '__desc', true) ?></textarea>
        <br>

        <?php
    }
    add_meta_box('desc_post','Giới thiệu sản phẩm','__desc','sanpham');

    function __mo_ta()
    {
        ?>
        <label for="__mo_ta"><b>Mô tả sản phẩm</b></label>
        <br>
        <textarea name="__mo_ta" id="__desc" cols="100" rows="10"><?php echo get_post_meta(get_the_ID(), '__mo_ta', true) ?></textarea>
        <br>
        <?php
    }
    add_meta_box('mo_ta','Mô tả sản phẩm','__mo_ta','sanpham');

    function __thong_so_kt()
    {
        ?>
        <label for="__thong_so_kt"><b>Thông số kĩ thuật</b></label>
        <br>
        <textarea name="__thong_so_kt" id="__desc" cols="100" rows="10"><?php echo get_post_meta(get_the_ID(), '__thong_so_kt', true) ?></textarea>
        <br>
        <?php
    }
    add_meta_box('thong_so_kt','Thông số kĩ thuật','__thong_so_kt','sanpham');
}
function __save_meta_cb($sanphamID)
{
    $metas = array(
        '__desc',
        '__mo_ta',
        '__thong_so_kt'
    );
    foreach ($metas AS $meta) {
        if (isset($_POST[$meta])) {
            update_post_meta($sanphamID, $meta, $_POST[$meta]);
        }
    }
}
add_action('save_post_sanpham', '__save_meta_cb');

// Custom post type: Slider
if( !function_exists('tratimex_post_type_slider') ) {

    function tratimex_post_type_slider()
    {


        $label = array(
            'name' => 'Slider',
            'add_new'   => __( 'Thêm Slider' ),
            'edit_item' => __( 'Sửa Slider' ),
        );


        $args = array(
            'labels' => $label,
            'supports' => array(
                'title',
                'excerpt',
                'thumbnail',
            ),
            'public' => true
        );

        register_post_type('slider', $args);

    }
    add_action('init', 'tratimex_post_type_slider');
}

/**
* Theme options
*/
add_action( 'admin_menu', 'add_admin_menu' );
function add_admin_menu() {
    add_options_page( 'Giao Diện', 'Giao Diện', 'manage_options', 'theme-option', 'theme_options_menu' );
}

function theme_options_menu() {
    require 'theme-options.php';
}

add_action( 'admin_enqueue_scripts', 'register_admin_scripts' );
function register_admin_scripts() {
    wp_enqueue_media();
}