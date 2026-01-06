
<?php $__env->startSection('title','crops'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
  <div class="py-6">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('crops-index', [])->html();
} elseif ($_instance->childHasBeenRendered('7pm8yuD')) {
    $componentId = $_instance->getRenderedChildComponentId('7pm8yuD');
    $componentTag = $_instance->getRenderedChildComponentTagName('7pm8yuD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7pm8yuD');
} else {
    $response = \Livewire\Livewire::mount('crops-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('7pm8yuD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/sections/crops.blade.php ENDPATH**/ ?>