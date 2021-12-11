<a href="#0" class="btn-top"></a>

<footer id="footer" class="footer">
	<div class="container">
		<div class="footer-logo">
			<a href="/" class="logo"><img src="<?= THEME_IMG; ?>logo.png" alt="Casino Neo-Club"></a>
		</div>

		<nav class="footer-menu">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'bottom',
					'container'      => false
				)
			); ?>
		</nav>

		<div class="footer-bottom">
			<div class="copy">© <?= date('Y'); ?> neo-club.club | <span>Все права защищены</span></div>
			<div class="age"><img src="<?= THEME_IMG . 'i18.png'; ?>" alt=""> Для лиц старше 18 лет</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
