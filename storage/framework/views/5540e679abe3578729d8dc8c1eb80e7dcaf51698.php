<?php $__env->startSection('content'); ?>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crops-manager')->html();
} elseif ($_instance->childHasBeenRendered('xSwDmLP')) {
    $componentId = $_instance->getRenderedChildComponentId('xSwDmLP');
    $componentTag = $_instance->getRenderedChildComponentTagName('xSwDmLP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xSwDmLP');
} else {
    $response = \Livewire\Livewire::mount('admin.crops-manager');
    $html = $response->html();
    $_instance->logRenderedChild('xSwDmLP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/admin/crops.blade.php ENDPATH**/ ?>