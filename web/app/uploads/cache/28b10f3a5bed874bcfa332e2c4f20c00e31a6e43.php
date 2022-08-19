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



            <div class="faq">
            

            <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqcontent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
                <button class="question faq open">
                    <?php echo e($faqcontent[0]); ?>

                </button>
                <div class="answer" style="display:block">
                    <?php echo e($faqcontent[1]); ?>

                </div>
      
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


              

              
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/angelcastillo/Desktop/valet-sites/clique-be-challenge/web/app/themes/be-challenge-theme/resources/views/partials/home-faq.blade.php ENDPATH**/ ?>