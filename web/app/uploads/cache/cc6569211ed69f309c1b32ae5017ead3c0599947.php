<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body <?php body_class() ?>>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="page" role="document">
	    <a class="visually-hidden" tabindex="-1" href="#main">Skip to main content</a>
        <div class="content">
            <main class="main" id="main">
                <?php echo $__env->yieldContent('content'); ?>
	            
            </main>
        </div>
    </div>

    <?php do_action('get_footer') ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php wp_footer() ?>
  </body>
</html>
<?php /**PATH /Users/angelcastillo/Desktop/valet-sites/clique-be-challenge/web/app/themes/be-challenge-theme/resources/views/layouts/app.blade.php ENDPATH**/ ?>