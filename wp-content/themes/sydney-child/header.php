<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */

$link_slider1 = get_field('link-slider-costum_1', 'options');
$link_slider2 = get_field('link-slider-costum_2', 'options');


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php sydney_do_schema( 'html' ); ?>>

<span id="toptarget"></span>

<?php wp_body_open(); ?>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>	

	<?php do_action( 'sydney_header' ); ?>

	<?php do_action('sydney_after_header'); ?>

	<div class="slider-costum" style="background-image: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) ), url(<?php the_field('slider_afbeelding-costum', 'options'); ?>)">
		<div class="slider-costum-inner">
			<?php if( get_field('titel-slider-costum_1', 'options') ): ?>
                <h2 class="titel-slider-costum_1"><?php the_field('titel-slider-costum_1', 'options'); ?></h2>
            <?php endif; ?>
			<?php if( get_field('titel-slider-costum_2', 'options') ): ?>
                <h2 class="titel-slider-costum_2"><?php the_field('titel-slider-costum_2', 'options'); ?></h2>
            <?php endif; ?>
			<?php
            if( $link_slider1 ): ?>
                <a class="tekst_link-slider-costum_1" target="_blank" href="<?php echo esc_url( $link_slider1 ); ?>">
                    <?php the_field('tekst_link-slider-costum_1', 'options'); ?>
                </a>
            <?php endif; ?>
			<?php
            if( $link_slider2 ): ?>
                <a class="tekst_link-slider-costum_2" target="_blank" href="<?php echo esc_url( $link_slider2 ); ?>">
                    <?php the_field('tekst_link-slider-costum_2', 'options'); ?>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            <?php endif; ?>
		</div>
	</div>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<?php if ( ( get_theme_mod('front_header_type','nothing') == 'image' && is_front_page() ) || (get_theme_mod('site_header_type') == 'image' && !is_front_page() ) ) : ?>
				<?php $shop_thumb = get_the_post_thumbnail_url( get_option( 'woocommerce_shop_page_id' )); ?>
				<?php if ( class_exists( 'Woocommerce' ) && is_shop() && !$shop_thumb  ) : ?>
					<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="breedte-page">