<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e(config('app.name', 'NARO infoHub')); ?></title>

  <!-- Tailwind (compiled via Mix) -->
  <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

  <!-- Helpers -->
  <style>[x-cloak]{ display:none !important; }</style>

  <!-- Livewire -->
  <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="bg-gray-50 font-sans antialiased">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav','data' => []]); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>  
  <main class="py-6">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <script src="<?php echo e(mix('js/app.js')); ?>"></script>
  <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /var/www/projects/NAROinfoHub/resources/views/layouts/app.blade.php ENDPATH**/ ?>