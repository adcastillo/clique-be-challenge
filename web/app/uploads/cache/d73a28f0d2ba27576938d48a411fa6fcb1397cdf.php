<footer class="footer">
	<div class="footer__container">
		<div class="footer__social">
			<?php if($footer->title): ?>
				<p><?php echo $footer->title; ?></p>
			<?php endif; ?>
			
			<?php if($share && $share->isNotEmpty()): ?>
				<ul>
					<?php echo $__env->make('partials.blocks.social-media', ['class' => 'footer-', 'links' => $share], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</ul>
			<?php endif; ?>
		</div>
		
		<?php if(has_nav_menu('primary_navigation')): ?>
			<nav class="footer__nav">
				<?php echo wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']); ?>

			</nav>
		<?php endif; ?>
		
		<?php if($footer->logo || $header_logo): ?>
			<div class="footer__logo">
				<a href="" target="" aria-label="Footer Link Text">
					<?php echo \App\Helper\ImageHelper::imgSrcSet($footer->logo ?: ($header_logo)); ?>

				</a>
			</div>
		<?php endif; ?>
		
		<div class="footer__small">
			<small>&copy; <?php echo date('Y') . " {$footer->copyright}"; ?></small>
		</div>
	</div>
</footer>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/continuum-theme/resources/views/partials/footer.blade.php ENDPATH**/ ?>