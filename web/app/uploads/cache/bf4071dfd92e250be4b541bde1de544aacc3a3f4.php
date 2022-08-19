<section id="faq" class="home__faq">
    <div class="home__faq__container">
        <div class="home__faq__copy">
	        <?php if($faq_title): ?>
                <h2><?php echo $faq_title; ?></h2>
	        <?php endif; ?>

            <button id="expand"><?php echo $expand_accordion ?: __('Expand All', 'sage'); ?></button> <span class="divider"></span>
            <button id="collapse"><?php echo $collapse_accordion ?: __('Collapse All', 'sage'); ?></button>

            <?php if($faq_repeater_title): ?>
                <h3><?php echo $faq_repeater_title; ?></h3>
	        <?php endif; ?>

            <?php if(!empty($faq)): ?>
                    <?php if(!empty($faq)): ?>

                        <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="faq">
                                
                                <?php if($q['title']): ?>
                                    <button class="question faq <?php if($i===0): ?> open <?php endif; ?>">
                                        <?php echo $q['title']; ?>

                                    </button>
                                <?php endif; ?>

                                <div class="answer" <?php if($i===0): ?> style="display:block <?php endif; ?>">
                                    <?php echo $q['content']; ?>

                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH /Users/justinhughes/Documents/sites/clique-be-challenge/web/app/themes/be-challenge-theme/resources/views/partials/home-faq.blade.php ENDPATH**/ ?>