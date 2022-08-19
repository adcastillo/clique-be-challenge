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
         
	        <?php if($faq_repeater): ?>
	            <div class="faq">
		            
					<?php $__currentLoopData = $faq_repeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    <button class="question <?php echo $faq->class; ?>">
						    <?php echo $faq->question; ?>

					    </button>
					    <div class="answer" <?php echo $faq->style; ?>>
					        <?php echo $faq->answer; ?>

					    </div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </div>
	        <?php endif; ?>

	        
            <div class="home__faq__copy__eligibility">
	            <?php if($cta): ?>
		            <?php echo $__env->make('partials.blocks.cta-btn', ['tooltip' => $cta, 'disclaimer' => true, 'classes' => \App::btnClass('faq')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	            <?php endif; ?>
             
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/continuum-theme/resources/views/partials/home-faq.blade.php ENDPATH**/ ?>