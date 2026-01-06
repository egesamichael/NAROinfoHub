<?php $attributes = $attributes->exceptProps([
    'expanded' => false,
]); ?>
<?php foreach (array_filter(([
    'expanded' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->class([
    'bg-white rounded p-4 md:p-6',
    'col-span-full' => $expanded,
])); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/components/card.blade.php ENDPATH**/ ?>