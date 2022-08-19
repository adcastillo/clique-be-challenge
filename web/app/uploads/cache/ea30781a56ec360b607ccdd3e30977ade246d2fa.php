<section id="about">
    <div class="home__about">
        <div class="home__about__container">
            <div class="home__about__intro">
                <?php if($about_title): ?>
                    <h2><?php echo $about_title; ?></h2>
	            <?php endif; ?>
	            <?php if($about_content): ?>
                    <?php echo $about_content; ?>

				<?php endif; ?>
            </div>
            <div class="home__about__studies">
                <div class="home__about__studies__item">
	                <?php if($about_image): ?>
                        <div class="home__about__studies__item__logo__container">
	                        <?php echo \App\Helper\ImageHelper::imgSrcSet($about_image, ['class' => 'home__about__studies__item__logo']); ?>

                        </div>
	                <?php endif; ?>
	                <?php if($about_content): ?>
                        <?php echo $about_content; ?>

					<?php endif; ?>
                </div>
            </div>
	
            <div class="home__about__copy__eligibility">
                <?php if($cta): ?>
                    <?php echo $__env->make('partials.blocks.cta-btn', ['tooltip' => $cta, 'disclaimer' => true, 'classes' => \App::btnClass('about')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
	        
        </div>
    </div>
    
</section>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/continuum-theme/resources/views/partials/home-about.blade.php ENDPATH**/ ?>