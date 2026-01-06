<?php
    $primaryClasses = $column->isPrimary() ? 'font-medium' : null;
?>

<div class="py-4">
    <?php if($column->getAction($record) !== null): ?>
        <button
            wire:click="<?php echo e($column->getAction($record)); ?>('<?php echo e($record->getKey()); ?>')"
            type="button"
            class="<?php echo e($primaryClasses); ?> hover:underline hover:text-primary-600 transition-colors duration-200"
        >
            <?php echo e($column->getValue($record)); ?>

        </button>
    <?php elseif($column->getUrl($record) !== null): ?>
        <a
            href="<?php echo e($column->getUrl($record)); ?>"
            class="<?php echo e($primaryClasses); ?> hover:underline hover:text-primary-600 transition-colors duration-200"
            <?php if($column->shouldUrlOpenInNewTab()): ?>
                target="_blank"
                rel="noopener noreferrer"
            <?php endif; ?>
        >
            <?php echo e($column->getValue($record)); ?>

        </a>
    <?php else: ?>
        <span class="<?php echo e($primaryClasses); ?>"><?php echo e($column->getValue($record)); ?></span>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\packages\tables\src/../resources/views/cells/text.blade.php ENDPATH**/ ?>