
<?php $__env->startSection('title','livestock'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
  <div class="py-6">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livestock-index', [])->html();
} elseif ($_instance->childHasBeenRendered('WpFMBYK')) {
    $componentId = $_instance->getRenderedChildComponentId('WpFMBYK');
    $componentTag = $_instance->getRenderedChildComponentTagName('WpFMBYK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WpFMBYK');
} else {
    $response = \Livewire\Livewire::mount('livestock-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('WpFMBYK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/sections/livestock.blade.php ENDPATH**/ ?>