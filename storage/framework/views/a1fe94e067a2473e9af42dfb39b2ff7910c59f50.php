<?php $__env->startSection('title','crops'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
  <div class="py-6">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('crops-index', [])->html();
} elseif ($_instance->childHasBeenRendered('v9DmeRv')) {
    $componentId = $_instance->getRenderedChildComponentId('v9DmeRv');
    $componentTag = $_instance->getRenderedChildComponentTagName('v9DmeRv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('v9DmeRv');
} else {
    $response = \Livewire\Livewire::mount('crops-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('v9DmeRv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/sections/crops.blade.php ENDPATH**/ ?>