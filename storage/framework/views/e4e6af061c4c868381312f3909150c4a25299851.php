<?php $__env->startSection('content'); ?>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crop-items-manager')->html();
} elseif ($_instance->childHasBeenRendered('dOYH3By')) {
    $componentId = $_instance->getRenderedChildComponentId('dOYH3By');
    $componentTag = $_instance->getRenderedChildComponentTagName('dOYH3By');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dOYH3By');
} else {
    $response = \Livewire\Livewire::mount('admin.crop-items-manager');
    $html = $response->html();
    $_instance->logRenderedChild('dOYH3By', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/admin/items.blade.php ENDPATH**/ ?>