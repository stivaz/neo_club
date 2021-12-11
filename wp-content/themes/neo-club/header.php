<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?= THEME_IMG; ?>favicon/favicon.ico">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="container">
		<div class="header-top">
			<div class="header-top-logo">
				<a href="/" class="logo"><img src="<?= THEME_IMG; ?>logo.png" alt="Casino Neo-Club"></a>
			</div>
			<div class="header-right">
				<a href="/favorites" title="Избранные слоты"><i class="fas fa-star"></i></a>
				<a href="<?= $rnd_link; ?>" title="Случайный слот"><i class="fas fa-random"></i></a>
			</div>
			<span class="menu-toggle"></span>
		</div>

		<div class="row header-bottom">
			<div class="header-left">
				<nav class="header-menu">
					<?php wp_nav_menu( [
						'theme_location' => 'main',
						'container'      => false
					] ); ?>
				</nav>
			</div>

			<div class="header-center">
				<a href="/" class="logo"><img src="<?= THEME_IMG; ?>logo.png" alt="Casino Neo-Club"></a>
			</div>

			<?php
			$rnd_post = get_posts( [
				'numberposts' => 1,
				'post_type'   => 'post',
				'orderby'     => 'rand'
			] );
			$rnd_link = get_permalink($rnd_post[0]->ID);
			?>
			<div class="header-right">
				<?php get_search_form(); ?>
				<a href="/favorites" title="Избранные слоты"><i class="fas fa-star"></i></a>
				<a href="<?= $rnd_link; ?>" title="Случайный слот"><i class="fas fa-random"></i></a>
			</div>
		</div>
	</div>
</header>
