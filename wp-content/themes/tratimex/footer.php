<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tratimex
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo home_url() ?><!--"><img src="--><?php //echo get_option('logo') ?><!--" alt="logo"></a>-->
<!--			--><?php //dynamic_sidebar( 'footer' ); ?>
<!--		</div><!-- .site-info -->
<!--		<div class="copyright">-->
<!--			<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">Traitimex</a>-->
<!--			<span>© 2017</span>-->
<!--		</div>-->
		<nav>
			<ul>
				<li><a href="./gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
				<li><a href="./san-pham/" title="Sản phẩm">Sản phẩm</a></li>
				<li><a href="./tin-tuc-2" title="Tin tức">Tin tức</a></li>
				<li><a href="./lien-he" title="Liên hệ">Liên hệ</a></li>
				<li><a href="./lien-he/" title="Bản đồ">Bản đồ</a></li>
			</ul>
		</nav>

		<p class="float-l">Copyright © 2017 Statimex. All Rights Reserved.</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
