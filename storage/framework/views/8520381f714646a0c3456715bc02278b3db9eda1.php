<?php $attributes = $attributes->exceptProps([
    'owner',
    'relations' => [],
]); ?>
<?php foreach (array_filter(([
    'owner',
    'relations' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="space-y-6">
    <?php $__currentLoopData = $relations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(\Livewire\Livewire::getAlias($manager, $manager::getName()), ['owner' => $owner])->html();
} elseif ($_instance->childHasBeenRendered($loop->index)) {
    $componentId = $_instance->getRenderedChildComponentId($loop->index);
    $componentTag = $_instance->getRenderedChildComponentTagName($loop->index);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($loop->index);
} else {
    $response = \Livewire\Livewire::mount(\Livewire\Livewire::getAlias($manager, $manager::getName()), ['owner' => $owner]);
    $html = $response->html();
    $_instance->logRenderedChild($loop->index, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/components/resources/relations.blade.php ENDPATH**/ ?>