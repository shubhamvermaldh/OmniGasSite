<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
	<div class="container">
		<div class="header-content">

			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php 
					if (has_custom_logo()) {
						the_custom_logo();
					} else {
						echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/logo.png') . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="logo-img">';
					}
					?>
				</a>
			</div>

			<nav class="main-nav" aria-label="Primary Navigation">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => '',
						'fallback_cb'    => false,
					));
				?>
			</nav>

			<button class="mobile-menu-toggle" aria-label="Toggle Menu">
				<i class="fas fa-bars"></i>
			</button>

		</div>
	</div>
</header>

<main class="main-content">
