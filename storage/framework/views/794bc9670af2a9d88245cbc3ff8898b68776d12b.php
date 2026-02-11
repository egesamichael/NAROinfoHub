<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'NARO Infohub')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
       <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <?php if(isset($slot)): ?>
                <?php echo e($slot); ?>

            <?php else: ?>
                <?php echo $__env->yieldContent('content'); ?>
            <?php endif; ?>
        </div>
    </body>
</html>
<?php /**PATH /var/www/projects/NAROinfoHub/resources/views/layouts/menu.blade.php ENDPATH**/ ?>