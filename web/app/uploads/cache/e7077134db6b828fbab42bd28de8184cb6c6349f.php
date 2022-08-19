<div id="eligibility-modal-underlay" class="eligibility-modal-underlay"></div>
<div id="eligibility-modal" class="eligibility-modal">
	<button id="eligibility-modal-close" class="eligibility-modal-close">
		<svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59">
			<title>close icon </title>
			<g fill="none" fill-rule="evenodd">
				<circle cx="29.5" cy="29.5" r="29.5" fill="#F26D0B" />
				<g fill="#FFF">
					<path d="M15.59 15.79l.2-.2a4 4 0 015.656 0l22.156 22.157a4 4 0 010 5.657l-.198.198a4 4 0 01-5.657 0L15.59 21.446a4 4 0 010-5.657z" />
					<path d="M43.404 15.59l.198.2a4 4 0 010 5.656L21.446 43.602a4 4 0 01-5.657 0l-.198-.198a4 4 0 010-5.657L37.747 15.59a4 4 0 015.657 0z" />
				</g>
			</g>
		</svg>
	</button>
	<div class="eligibility-modal__iframe">
		<iframe src="" frameborder="0"></iframe>
	</div>
	<div class="modal--exit">
		<div class="modal__background"></div>
		<div class="text-cnt">
			<?php if(isset($iframe['close_iframe'])): ?>
				<h2 class="type--section-heading" tabindex="-1" aria-label="<?php echo $iframe['close_iframe']; ?>"><?php echo $iframe['close_iframe']; ?></h2>
			<?php endif; ?>
			<div class="modal__buttons">
				<?php if(isset($iframe['deny_close'])): ?>
					<a href="#" class="button white btn--large btn--hairline modal-no"
					   aria-label="<?php echo $iframe['deny_close']; ?>"
					   data-modal="stay-on-screener">
						<span><?php echo $iframe['deny_close']; ?></span>
					</a>
				<?php endif; ?>
				<?php if(isset($iframe['confirm_close'])): ?>
					<a href="#" role="button" class="button btn--large modal-leave"
					   aria-label="<?php echo $iframe['confirm_close']; ?>"
					   data-modal="leave-screener"
					   title="modal-close">
						<span><?php echo $iframe['confirm_close']; ?></span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/continuum-theme/resources/views/partials/modal.blade.php ENDPATH**/ ?>