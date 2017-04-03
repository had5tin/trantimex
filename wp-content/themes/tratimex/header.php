<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmax
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="logo">
			<div class="container">
				<div class="row">
					<div class="col-md-6 left">
						<div class="wrap">
							<a href="<?php echo home_url() ?>"><img src="<?php echo get_option('logo') ?>" alt="logo"></a>
						</div>
					</div>
					<div class="col-md-6 right">
						<div class="search-form">
							<?php echo get_search_form(); ?>
						</div>
						<div class="languages">
							<?php dynamic_sidebar( 'languages' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 left">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
									'container' => false,
									'menu_class'     => 'list-inline',
								)
							); ?>
						</nav><!-- #site-navigation -->
						<nav id="mobile-navigation" class="mobile-navigation">
							<div id="o-wrapper" class="o-wrapper">

								<main class="o-content">
									<div class="o-container">

										<div class="c-buttons">
											<button id="c-button--push-left" class="c-button"><i class="fa fa-bars"></i></button>
										</div>

										<div id="github-icons"></div>

									</div><!-- /o-container -->
								</main><!-- /o-content -->

							</div><!-- /o-wrapper -->


							<nav id="c-menu--push-left" class="c-menu c-menu--push-left">
								<button class="c-menu__close">&larr; Đóng Menu</button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id' => 'primary-menu',
										'container' => false,
										'menu_class'     => 'c-menu__items',
									)
								); ?>
							</nav><!-- /c-menu push-left -->


							<div id="c-mask" class="c-mask"></div><!-- /c-mask -->
						</nav>
					</div>
<!--					<div class="right col-md-3">-->
<!--						<ul class="list-inline">-->
<!--							<li>-->
<!--								<a href="./lien-he/">-->
<!--									<i class="fa fa-map-marker"></i>-->
<!--								</a>-->
<!--							</li>-->
<!--							<li>-->
<!--								<a href="mailto:">-->
<!--									<i class="fa fa-envelope-o"></i>-->
<!--								</a>-->
<!--							</li>-->
<!--							<li>-->
<!--								<a href="tel:0313654434">-->
<!--									<i class="fa fa-phone"></i>-->
<!--								</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
				</div>
			</div>
		</div><!-- .site-branding -->
		<div class="site-branding site-scroll">
			<div class="container">
				<div class="row">
					<div class="col-md-12 left">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
									'container' => false,
									'menu_class'     => 'list-inline',
								)
							); ?>
						</nav><!-- #site-navigation -->
						<nav id="mobile-navigation" class="mobile-navigation">
							<div id="o-wrapper" class="o-wrapper">

								<main class="o-content">
									<div class="o-container">

										<div class="c-buttons">
											<button id="c-button--push-left" class="c-button"><i class="fa fa-bars"></i></button>
										</div>

										<div id="github-icons"></div>

									</div><!-- /o-container -->
								</main><!-- /o-content -->

							</div><!-- /o-wrapper -->


							<nav id="c-menu--push-left" class="c-menu c-menu--push-left">
								<button class="c-menu__close">&larr; Đóng Menu</button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id' => 'primary-menu',
										'container' => false,
										'menu_class'     => 'c-menu__items',
									)
								); ?>
							</nav><!-- /c-menu push-left -->


							<div id="c-mask" class="c-mask"></div><!-- /c-mask -->
						</nav>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">

