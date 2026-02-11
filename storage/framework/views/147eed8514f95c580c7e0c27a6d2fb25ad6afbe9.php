<?php if($column->getAction($record) !== null): ?>
    <button
        wire:click="<?php echo e($column->getAction($record)); ?>('<?php echo e($record->getKey()); ?>')"
        type="button"
    >
        <img
            src="<?php echo e($column->getPath($record)); ?>"
            class="<?php echo e($column->isRounded() ? 'rounded-full' : null); ?>"
            style="
                <?php echo $column->getHeight() !== null ? "height: {$column->getHeight()};" : null; ?>

                <?php echo $column->getWidth() !== null ? "width: {$column->getWidth()};" : null; ?>

            "
        />
    </button>
<?php elseif($column->getUrl($record) !== null): ?>
    <a
        href="<?php echo e($column->getUrl($record)); ?>"
        <?php if($column->shouldUrlOpenInNewTab()): ?>
            target="_blank"
            rel="noopener noreferrer"
        <?php endif; ?>
    >
        <img
            src="<?php echo e($column->getPath($record)); ?>"
            class="<?php echo e($column->isRounded() ? 'rounded-full' : null); ?>"
            style="
                <?php echo $column->getHeight() !== null ? "height: {$column->getHeight()};" : null; ?>

                <?php echo $column->getWidth() !== null ? "width: {$column->getWidth()};" : null; ?>

            "
        />
    </a>
<?php elseif($column->getPath($record) !== null): ?>
    <img
        src="<?php echo e($column->getPath($record)); ?>"
        class="<?php echo e($column->isRounded() ? 'rounded-full' : null); ?>"
        style="
            <?php echo $column->getHeight() !== null ? "height: {$column->getHeight()};" : null; ?>

            <?php echo $column->getWidth() !== null ? "width: {$column->getWidth()};" : null; ?>

        "
    />
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/tables/resources/views/cells/image.blade.php ENDPATH**/ ?>