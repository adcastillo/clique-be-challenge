<header id="header" class="header">
	<div id="header__top" class="header__top">
		<div class="header__top__container">
			<?php if($share && $share->isNotEmpty()): ?>
				<div class="header__top__social">
					<ul>
						<?php echo $__env->make('partials.blocks.social-media', ['class' => 'header-', 'links' => $share], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</ul>
				</div>
			<?php endif; ?>
			
			<div class="header__top__lang">
				<?php echo do_action('wpml_add_language_selector'); ?>

			</div>
			
		</div>
	</div>
	<div class="header__main">
		<div class="header__main__container">
			
			<div class="header__main__logo">
				<a href="<?php echo $site_url; ?>" class="home-link <?php echo is_front_page() ? 'on-homepage' : ''; ?>">
					<?php echo \App\Helper\ImageHelper::imgSrcSet($header_logo); ?>

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
				
				<?php if($cta): ?>
					<button class="header-eligibility-btn btn btn--orange eligibility-btn <?php echo \App::btnClass('header'); ?>" data-src="<?php echo $cta['iframe'] ?? ''; ?>">
						<?php echo $cta['btn_text'] ?? ''; ?>

					</button>
					
					
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</header>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/continuum-theme/resources/views/partials/header.blade.php ENDPATH**/ ?>