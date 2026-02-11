<?php $__env->startSection('title','Admin - Details'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto px-4 py-6">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-topic-detail-manager', [])->html();
} elseif ($_instance->childHasBeenRendered('kxCyS2P')) {
    $componentId = $_instance->getRenderedChildComponentId('kxCyS2P');
    $componentTag = $_instance->getRenderedChildComponentTagName('kxCyS2P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kxCyS2P');
} else {
    $response = \Livewire\Livewire::mount('admin-topic-detail-manager', []);
    $html = $response->html();
    $_instance->logRenderedChild('kxCyS2P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/admin/details.blade.php ENDPATH**/ ?>