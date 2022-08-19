<header id="header" class="header">
	<div class="header__main">
		<div class="header__main__container">

			<div class="header__main__logo">
				<a href="<?php echo $site_url; ?>" class="home-link <?php echo is_front_page() ? 'on-homepage' : ''; ?>">
					<?php echo \App\Helper\ImageHelper::imgSrcSet($site_logo); ?>

				</a>
			</div>

			<button class="header__main__mobile-toggle hamburger hamburger--slider js-hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</button>

			<div class="header__main__nav">
				<nav>
					<?php if(has_nav_menu('primary_navigation')): ?>
						<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

					<?php endif; ?>
				</nav>
			</div>
		</div>
	</div>
</header>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/be-challenge-theme/resources/views/partials/header.blade.php ENDPATH**/ ?>