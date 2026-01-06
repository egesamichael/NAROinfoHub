
<?php $__env->startSection('title','crops'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
  <div class="py-6">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('crops-index', [])->html();
} elseif ($_instance->childHasBeenRendered('z0hYbuT')) {
    $componentId = $_instance->getRenderedChildComponentId('z0hYbuT');
    $componentTag = $_instance->getRenderedChildComponentTagName('z0hYbuT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z0hYbuT');
} else {
    $response = \Livewire\Livewire::mount('crops-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('z0hYbuT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/sections/crops.blade.php ENDPATH**/ ?>