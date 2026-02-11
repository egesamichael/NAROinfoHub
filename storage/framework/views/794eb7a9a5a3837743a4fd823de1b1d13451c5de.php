<img <?php echo e($attributes->merge([
    'src' => $src(),
    'srcset' => $srcSet(),
    'alt' => $user->name,
    'width' => $size,
    'height' => $size,
    'loading' => 'lazy'
])); ?> />
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/components/avatar.blade.php ENDPATH**/ ?>