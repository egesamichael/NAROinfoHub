<?php $__env->startSection('content'); ?>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crop-categories-manager')->html();
} elseif ($_instance->childHasBeenRendered('jXC0je1')) {
    $componentId = $_instance->getRenderedChildComponentId('jXC0je1');
    $componentTag = $_instance->getRenderedChildComponentTagName('jXC0je1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jXC0je1');
} else {
    $response = \Livewire\Livewire::mount('admin.crop-categories-manager');
    $html = $response->html();
    $_instance->logRenderedChild('jXC0je1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/admin/categories.blade.php ENDPATH**/ ?>