<?php if($action = $recordAction->getAction($record)): ?>
    <button
        wire:click="<?php echo e($action); ?>('<?php echo e($record->getKey()); ?>')"
        <?php echo $recordAction->getTitle() ? 'title="' . __($recordAction->getTitle()) . '"' : null; ?>

        type="button"
        class="inline-flex items-center font-medium transition-colors duration-200 text-primary-600 hover:underline hover:text-primary-700"
    >
        <?php if($recordAction->hasIcon()): ?>
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $recordAction->getIcon()]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1 inline']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo e(__($recordAction->getLabel())); ?>

    </button>
<?php elseif($url = $recordAction->getUrl($record)): ?>
    <a
        href="<?php echo e($url); ?>"
        <?php echo $recordAction->getTitle() ? 'title="' . __($recordAction->getTitle()) . '"' : null; ?>

        <?php if($recordAction->shouldUrlOpenInNewTab()): ?>
            target="_blank"
            rel="noopener noreferrer"
        <?php endif; ?>
        class="inline-flex items-center font-medium transition-colors duration-200 text-primary-600 hover:underline hover:text-primary-700"
    >
        <?php if($recordAction->hasIcon()): ?>
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $recordAction->getIcon()]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1 inline']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo e(__($recordAction->getLabel())); ?>

    </a>
<?php else: ?>
    <span
        class="inline-flex items-center font-medium text-primary-600"
    >
        <?php if($recordAction->hasIcon()): ?>
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $recordAction->getIcon()]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1 inline']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo e(__($recordAction->getLabel())); ?>

    </span>
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/tables/resources/views/record-actions/link.blade.php ENDPATH**/ ?>