<?php $__env->startSection('title','Admin - Sub Topics'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto px-4 py-6">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-sub-topic-manager', [])->html();
} elseif ($_instance->childHasBeenRendered('YMkaXus')) {
    $componentId = $_instance->getRenderedChildComponentId('YMkaXus');
    $componentTag = $_instance->getRenderedChildComponentTagName('YMkaXus');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YMkaXus');
} else {
    $response = \Livewire\Livewire::mount('admin-sub-topic-manager', []);
    $html = $response->html();
    $_instance->logRenderedChild('YMkaXus', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/admin/subtopics.blade.php ENDPATH**/ ?>