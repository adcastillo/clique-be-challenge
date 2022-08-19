<section id="intro" class="home__intro">
    <div class="home__intro__container">
        <div class="home__intro__copy">
	        <?php if($hero_title): ?>
                <h1><?php echo $hero_title; ?></h1>
	        <?php endif; ?>

	        <?php echo $hero_content ?: ''; ?>

        </div>

        <div class="home__intro__image">
            <?php echo has_post_thumbnail() ? \App\Helper\ImageHelper::imgSrcSet(get_post_thumbnail_id()) : ''; ?>

        </div>
    </div>
</section>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/be-challenge-theme/resources/views/partials/home-hero.blade.php ENDPATH**/ ?>