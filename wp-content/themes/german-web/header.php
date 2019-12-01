<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package german-web
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- верхние линии -->

<div class="topLine">
		<div class="wrapper">
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</div>

	<!-- start header -->

	<header class="header">
		<div class="wrapper">

			<div class="top-line">
				<div class="top-line__phone-group">
					<a class="top-line__phone-group__phone" href="tel:+442077198816"><?php the_field('phone-1'); ?>
						<span>круглосуточно</span>
					</a>

					<a class="top-line__phone-group__phone" href="tel:+447771007676"><?php the_field('phone-2'); ?>
						<span>viber & whats up</span>
					</a>
				</div>

				<div class="top-line__logo">
					<?php the_custom_logo(); ?>
				</div>

				<div class="top-line__btn-group">
					<a href="#" class="top-line__btn-group__button">Узнать тариф</a>
					<a href="#" class="top-line__btn-group__button">Сделать заказ</a>
				</div>
			</div>
		</div>

		<!-- menu -->


		<nav class="menu">

			<a href="#menu" class="menu-link">
				<span></span>
			</a>

			<div class="wrapper">
			
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'Header',
					'container' => 'ul',
					'container_class' => 'menu',
					'menu_class'      => 'menu-main',
				) );
				
			?>
				
			</div>

		</nav>


		<!--Хлебные крошки-->


		<div class="wrapper">
			<div class="breadcrumb">
				<ul>
					<li class="breadcrumb-item"><a href="#">Главная</a></li>
					<li class="breadcrumb-item"><a href="#">События</a></li>
					<li class="breadcrumb-item active"><a href="#">Экскурсии</a></li>
				</ul>
			</div>
		</div>

	</header> <!-- end header -->
