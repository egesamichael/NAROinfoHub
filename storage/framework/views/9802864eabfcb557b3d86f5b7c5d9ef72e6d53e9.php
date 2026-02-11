<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.field-group','data' => ['columnSpan' => $formComponent->getColumnSpan(),'errorKey' => $formComponent->getName(),'for' => $formComponent->getId(),'label' => $formComponent->getLabel()]]); ?>
<?php $component->withName('forms::field-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['column-span' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getColumnSpan()),'error-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getName()),'for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getId()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getLabel())]); ?>
    <div class="flex">
        <span
            class="block w-full placeholder-gray-400 placeholder-opacity-100 px-3 py-2 cursor-default"
        >
            <?php echo e($formComponent->getValue()); ?>

        </span>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/placeholder.blade.php ENDPATH**/ ?>