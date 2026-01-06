<?php $attributes = $attributes->exceptProps([
    'actions' => [],
]); ?>
<?php foreach (array_filter(([
    'actions' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex flex-wrap items-center gap-3 rtl:flex-row-reverse">
    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.button','data' => ['color' => $button->getColor(),'href' => $button->getUrl(),'type' => $button->getType(),'wire:click' => $button->getAction() ?? false]]); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button->getColor()),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button->getUrl()),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button->getType()),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button->getAction() ?? false)]); ?>
            <?php echo e(__($button->getLabel())); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/components/resources/forms/actions.blade.php ENDPATH**/ ?>