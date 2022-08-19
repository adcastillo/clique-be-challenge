<section id="about">
    <div class="home__about">
        <div class="home__about__container">
            <div class="home__about__intro">

                <?php if($about_title): ?>
                    <h2><?php echo $about_title; ?></h2>
                <?php endif; ?>

            </div>
            <div class="home__about__studies">
                <div class="home__about__studies__item">
                    <div class="home__about__studies__item__logo__container">

                        <?php if(!empty($about_image)): ?>
                            <?php echo \App\Helper\ImageHelper::imgSrcSet(get_post_thumbnail_id()); ?>

                        <?php endif; ?>;

                    </div>
                    <?php echo $about_content ?? ''; ?>

                </div>
            </div>
        </div>
    </div>

</section>
<?php /**PATH /Users/justinhughes/Documents/sites/clique-be-challenge/web/app/themes/be-challenge-theme/resources/views/partials/home-about.blade.php ENDPATH**/ ?>