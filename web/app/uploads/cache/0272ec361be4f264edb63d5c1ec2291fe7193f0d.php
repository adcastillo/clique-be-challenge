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
                <button class="question faq open">
                    Another question?
                </button>
                <div class="answer" style="display:block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>

                <button class="question faq">
                    What is the question?
                </button>
                <div class="answer" style="display:none">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/be-challenge-theme/resources/views/partials/home-faq.blade.php ENDPATH**/ ?>