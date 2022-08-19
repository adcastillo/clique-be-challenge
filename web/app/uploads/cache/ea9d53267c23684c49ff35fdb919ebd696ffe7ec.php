<div class="button-cnt">
	<button class="btn btn--orange btn--large eligibility-btn <?php echo e($classes ?? ''); ?>" data-src="<?php echo $cta['iframe'] ?? ''; ?>">
		<?php echo $cta['btn_text'] ?? ''; ?>

	</button>
	
	<?php if($disclaimer && isset($cta['disclaimer'])): ?>
		<button class="legal"><?php echo $cta['disclaimer']; ?> <span class="help">?</span>
			<?php if(isset($cta['tooltip'])): ?>)
				<span class="tooltip">
					<p><?php echo $cta['tooltip']; ?></p>
				</span>
			<?php endif; ?>
		</button>
		<?php if(isset($cta['tooltip'])): ?>)
			<span class="tooltip mobile-tooltip">
				<button class="close">
					<span><?php echo $cta['closetooltip']; ?></span>
				</button>
				<p><?php echo $cta['tooltip']; ?></p>
			</span>
		<?php endif; ?>
		<div class="page-overlay"></div>
	<?php endif; ?>
</div>
<?php /**PATH /Users/fbouyer/dev/web/php/sites/be-code-challenge/web/app/themes/be-challenge-theme/resources/views/partials/blocks/cta-btn.blade.php ENDPATH**/ ?>