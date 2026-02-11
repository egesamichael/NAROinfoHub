<?php $attributes = $attributes->exceptProps([
    'table',
]); ?>
<?php foreach (array_filter(([
    'table',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex shadow-sm">
    <?php if($this->isFilterable()): ?>
        <select wire:model="filter" class="text-sm flex-shrink-0 sm:text-base focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border-gray-300 <?php echo e($this->isSearchable() ? 'rounded-l' : 'rounded'); ?>">
            <option><?php echo e(__('tables::table.filter.placeholder')); ?></option>

            <?php $__currentLoopData = $table->getVisibleFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($filter->getName()); ?>"><?php echo e(__($filter->getLabel())); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <?php endif; ?>

    <?php if($this->isSearchable()): ?>
        <div class="relative flex-grow">
            <input
                type="search"
                wire:model="search"
                placeholder="<?php echo e(__('tables::table.search.placeholder')); ?>"
                class="text-sm sm:text-base pl-10 block w-full placeholder-gray-400 focus:placeholder-gray-500 placeholder-opacity-100 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 border-gray-300 <?php echo e($this->isFilterable() ? 'rounded-r border-l-0' : 'rounded'); ?>"
            />

            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none" aria-hidden="true">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-5 h-5','wire:loading.remove' => true,'wire:target' => 'search']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>

                <svg wire:loading wire:target="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                    <path d="M6.306 28.014c1.72 10.174 11.362 17.027 21.536 15.307C38.016 41.6 44.87 31.958 43.15 21.784l-4.011.678c1.345 7.958-4.015 15.502-11.974 16.847-7.959 1.346-15.501-4.014-16.847-11.973l-4.011.678z">
                    <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur=".7s" repeatCount="indefinite"/></path>
                </svg>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/tables/resources/views/components/filter.blade.php ENDPATH**/ ?>