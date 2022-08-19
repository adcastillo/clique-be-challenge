<section id="why">
	<div class="home__why">
		<div class="home__why__container">
			<div class="home__why__copy">
				<?php if($why_title): ?>
					<h2><?php echo $why_title; ?></h2>
				<?php endif; ?>
				
				<?php if($why_subtitle): ?>
					<p class="large-text"><?php echo $why_subtitle; ?></p>
				<?php endif; ?>
				
				<?php echo $why_content ?: ''; ?>

			</div>
			
			<?php if($why_image): ?>
				<div class="home__why__image">
					<?php echo \App\Helper\ImageHelper::imgSrcSet($why_image); ?>

				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/be-challenge-theme/resources/views/partials/home-why.blade.php ENDPATH**/ ?>