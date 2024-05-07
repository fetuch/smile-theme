<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-dark antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div class="min-h-screen">

		<?php do_action('tailpress_header'); ?>

		<?php get_template_part('template-parts/top-bar'); ?>

		<?php get_template_part('template-parts/header-nav'); ?>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>