<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action('pfadispeicher_site_before'); ?>

	<div id="page">
		<?php do_action('pfadispeicher_header'); ?>

		<header>
			<div>Header</div>
			
			<?php
			wp_nav_menu(
				array(
					'container_id' => 'primary-menu',
					'container_class' => '',
					'menu_class' => '',
					'li_class' => '',
					'fallback_cb' => false,
					'theme_location' => 'primary',
				)
			);
			?>
		</header>

		<div id="content" class="site-content flex-grow">
			<?php do_action('pfadispeicher_content_start'); ?>
			<main>