<section id="intro" class="home__intro">
    <div class="home__intro__container">
        <div class="home__intro__copy">
	        <?php if($hero_title): ?>
                <h1><?php echo $hero_title; ?></h1>
	        <?php endif; ?>
	        
	        <?php echo $hero_content ?: ''; ?>

		       
	        <?php if($cta): ?>
				<?php echo $__env->make('partials.blocks.cta-btn', ['tooltip' => $cta, 'disclaimer' => true, 'classes' => \App::btnClass('hero')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endif; ?>
        </div>

        <div class="home__intro__image">
            <?php echo has_post_thumbnail() ? \App\Helper\ImageHelper::imgSrcSet(get_post_thumbnail_id()) : ''; ?>

        </div>
    </div>
</section>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/continuum-theme/resources/views/partials/home-hero.blade.php ENDPATH**/ ?>