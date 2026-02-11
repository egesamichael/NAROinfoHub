<?php $__env->startSection('title','livestock'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
  <div class="py-6">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livestock-index', [])->html();
} elseif ($_instance->childHasBeenRendered('2ppqVxE')) {
    $componentId = $_instance->getRenderedChildComponentId('2ppqVxE');
    $componentTag = $_instance->getRenderedChildComponentTagName('2ppqVxE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2ppqVxE');
} else {
    $response = \Livewire\Livewire::mount('livestock-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('2ppqVxE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/sections/livestock.blade.php ENDPATH**/ ?>