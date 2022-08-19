<footer class="footer">
	<div class="footer__container">
		<div class="footer__social">
			<p>Share</p>
			
			<ul class="share">
				<li>
					<a class="footer-share-facebook" href="#" target="_blank">
						<img src="<?= App\asset_path('images/facebook.svg'); ?>" alt="Share on Facebook">
						<span class="screen-reader-text">Facebook</span>
					</a>
				</li>
				<li>
					<a class="footer-share-twitter" href="#" target="_blank">
						<img src="<?= App\asset_path('images/twitter.svg'); ?>" alt="Share on Twitter">
						<span class="screen-reader-text">Twitter</span>
					</a>
				</li>
				<li>
					<a class="footer-share-mail" href="#" target="_blank">
						<img src="<?= App\asset_path('images/email.svg'); ?>" alt="Share via email">
						<span class="screen-reader-text">Mail</span>
					</a>
				</li>
			</ul>
		</div>
		
		<?php if(has_nav_menu('primary_navigation')): ?>
			<nav class="footer__nav">
				<?php echo wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']); ?>

			</nav>
		<?php endif; ?>
		
		
		<div class="footer__logo">
			<a href="" target="" aria-label="Footer Link Text">
				<?php echo \App\Helper\ImageHelper::imgSrcSet($site_logo); ?>

			</a>
		</div>
		
		
		<div class="footer__small">
			<small>&copy; <?php echo date('Y') . " $site_name All rights reserved."; ?></small>
		</div>
	</div>
</footer>
<?php /**PATH /Users/justinhughes/Documents/sites/clique-be-challenge/web/app/themes/be-challenge-theme/resources/views/partials/footer.blade.php ENDPATH**/ ?>