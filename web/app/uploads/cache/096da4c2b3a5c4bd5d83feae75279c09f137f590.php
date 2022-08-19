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
	            <a href="#intro" class="top"><svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81">
			            <title>back to top</title>
			            <g fill="none" fill-rule="evenodd" transform="rotate(-180 40.5 40.5)">
				            <circle cx="40.5" cy="40.5" r="40.5" />
				            <g fill="#FFF" transform="translate(17.847 16.475)">
					            <path d="M22.652 48.05L0 26.086h45.305z"/>
					            <rect width="17.847" height="35.695" x="13.729" rx="3"/>
				            </g>
			            </g>
		            </svg>
	            </a>
            </main>
        </div>
    </div>

    <?php do_action('get_footer') ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php wp_footer() ?>
  </body>
</html>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/be-challenge-theme/resources/views/layouts/app.blade.php ENDPATH**/ ?>