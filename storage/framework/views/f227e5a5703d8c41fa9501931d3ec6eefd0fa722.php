<div
    aria-labelledby="<?php echo e("{$formComponent->getId()}"); ?>"
    id="<?php echo e("{$formComponent->getId()}-tab"); ?>"
    role="tabpanel"
    tabindex="0"
    x-show="tab === '<?php echo e("{$formComponent->getId()}"); ?>'"
    class="p-4 md:p-6"
>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.form','data' => ['schema' => $formComponent->getSchema(),'columns' => $formComponent->getColumns()]]); ?>
<?php $component->withName('forms::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['schema' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getSchema()),'columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getColumns())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/tab.blade.php ENDPATH**/ ?>