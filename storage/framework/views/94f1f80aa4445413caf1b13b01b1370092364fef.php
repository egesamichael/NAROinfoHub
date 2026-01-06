<?php $attributes = $attributes->exceptProps([
    'activeRule',
    'icon',
    'label',
    'url',
]); ?>
<?php foreach (array_filter(([
    'activeRule',
    'icon',
    'label',
    'url',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a
    href="<?php echo e($url); ?>"
    <?php echo e($attributes->merge(['class' => 'px-4 py-3 flex items-center space-x-3 rtl:space-x-reverse rounded transition-color duration-200 hover:text-white ' . (request()->is($activeRule) ? 'text-white bg-gray-900' : 'text-current')])); ?>

>
    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $icon]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>

    <span class="flex-grow text-sm font-medium leading-tight"><?php echo e(__($label)); ?></span>
</a>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/components/nav-link.blade.php ENDPATH**/ ?>