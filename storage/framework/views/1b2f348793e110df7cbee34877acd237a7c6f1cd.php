<?php $__env->startSection('title','Admin - Topics'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto px-4 py-6">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-topic-manager', [])->html();
} elseif ($_instance->childHasBeenRendered('gCmNOkq')) {
    $componentId = $_instance->getRenderedChildComponentId('gCmNOkq');
    $componentTag = $_instance->getRenderedChildComponentTagName('gCmNOkq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gCmNOkq');
} else {
    $response = \Livewire\Livewire::mount('admin-topic-manager', []);
    $html = $response->html();
    $_instance->logRenderedChild('gCmNOkq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/admin/topics.blade.php ENDPATH**/ ?>