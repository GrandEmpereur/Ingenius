<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group">

			<div class="herder__content">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>-child/assets/images/logo.png" alt="">
					</a>
				</div>

				<div class="nav__items">
					<div class="menu">
						<li class="event" ><a href="#">Event</a></li>
						<li class="download"><a href="#">Download</a></li>
						<li class="apply" ><a href="#">Apply</a></li>
					</div>
					<div class="langue">
						<li><a href="#">EN</a></li>
						<li><a href="#">FR</a></li>
					</div>
				</div>
			</div>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
