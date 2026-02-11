<?php $attributes = $attributes->exceptProps([
    'button' => false,
    'class' => 'w-full flex text-sm leading-tight text-left whitespace-nowrap rounded py-1.5 px-4 transition-colors duration-200 text-white hover:bg-primary-700',
]); ?>
<?php foreach (array_filter(([
    'button' => false,
    'class' => 'w-full flex text-sm leading-tight text-left whitespace-nowrap rounded py-1.5 px-4 transition-colors duration-200 text-white hover:bg-primary-700',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($button): ?>
    <button <?php echo e($attributes->merge(['class' => $class])); ?>><?php echo e($slot); ?></button>
<?php else: ?>
    <a <?php echo e($attributes->merge(['class' => $class])); ?>><?php echo e($slot); ?></a>
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/components/dropdown-link.blade.php ENDPATH**/ ?>