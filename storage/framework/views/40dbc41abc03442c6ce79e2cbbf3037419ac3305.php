<?php $attributes = $attributes->exceptProps([
    'records' => [],
    'selected' => [],
    'sortColumn' => null,
    'sortDirection' => 'asc',
    'table',
]); ?>
<?php foreach (array_filter(([
    'records' => [],
    'selected' => [],
    'sortColumn' => null,
    'sortDirection' => 'asc',
    'table',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($this->isReorderable()): ?>
    <?php if(! isset($__env->__pushonce_filament_scripts_table)): $__env->__pushonce_filament_scripts_table = 1; $__env->startPush('filament-scripts'); ?>
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <?php $__env->stopPush(); endif; ?>
<?php endif; ?>

<div class="overflow-x-auto bg-white rounded">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-200">
            <tr>
                <th class="w-4 p-4 whitespace-nowrap">
                    <input
                        <?php echo e($records->count() && $records->count() === count($selected) ? 'checked' : null); ?>

                        wire:click="toggleSelectAll"
                        type="checkbox"
                        class="border-gray-300 rounded shadow-sm text-primary-600 focus:border-primary-600 focus:ring focus:ring-primary-200 focus:ring-opacity-50"
                    />
                </th>

                <?php $__currentLoopData = $table->getVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="px-6 py-3 text-left text-gray-600" scope="col">
                        <?php if($this->isSortable() && $column->isSortable()): ?>
                            <button
                                wire:click="sortBy('<?php echo e($column->getName()); ?>')"
                                type="button"
                                class="flex items-center space-x-1 rtl:space-x-reverse text-xs font-medium tracking-wider text-left uppercase group focus:outline-none focus:underline"
                            >
                                <span><?php echo e(__($column->getLabel())); ?></span>

                                <span class="relative flex items-center">
                                    <?php if($sortColumn === $column->getName()): ?>
                                        <span>
                                            <?php if($sortDirection === 'asc'): ?>
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                            <?php elseif($sortDirection === 'desc'): ?>
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                            <?php endif; ?>
                                        </span>
                                    <?php else: ?>
                                        <svg class="w-3 h-3 transition-opacity duration-300 opacity-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    <?php endif; ?>
                                </span>
                            </button>
                        <?php else: ?>
                            <div class="flex justify-start">
                                <span class="text-xs font-medium tracking-wider uppercase"><?php echo e(__($column->getLabel())); ?></span>
                            </div>
                        <?php endif; ?>
                    </th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <th scope="col"></th>

                <?php if($this->isReorderable()): ?>
                    <th scope="col"></th>
                <?php endif; ?>
            </tr>
        </thead>

        <tbody
            <?php if($this->isReorderable()): ?> wire:sortable="reorder" <?php endif; ?>
            class="text-sm leading-tight divide-y divide-gray-200"
        >
            <?php $__empty_1 = true; $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr
                    wire:key="<?php echo e($record->getKey()); ?>"
                    wire:loading.class="opacity-50"
                    <?php if($this->isReorderable()): ?> wire:sortable.item="<?php echo e($record->getKey()); ?>" <?php endif; ?>
                    class="<?php echo e($loop->index % 2 ? 'bg-gray-50' : 'bg-white'); ?>"
                >
                    <td class="p-4 whitespace-nowrap">
                        <input
                            <?php echo e(in_array($record->getKey(), $selected) ? 'checked' : null); ?>

                            wire:click="toggleSelected('<?php echo e($record->getKey()); ?>')"
                            type="checkbox"
                            class="border-gray-300 rounded shadow-sm text-primary-600 focus:border-primary-600 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        />
                    </td>

                    <?php $__currentLoopData = $table->getVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="px-6 whitespace-nowrap">
                            <?php echo e($column->renderCell($record)); ?>

                        </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <td class="px-6 py-4 whitespace-nowrap flex justify-end items-center space-x-2 rtl:space-x-reverse">
                        <?php $__currentLoopData = $table->getRecordActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recordAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($recordAction->render($record)); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>

                    <?php if($this->isReorderable()): ?>
                        <td wire:sortable.handle class="px-6 border-l cursor-move whitespace-nowrap">
                            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-menu-alt-4'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gray-500 mx-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td
                        class="px-6 py-4 whitespace-nowrap"
                        colspan="<?php echo e(count($table->getVisibleColumns()) + ($this->isReorderable() ? 3 : 2)); ?>"
                    >
                        <div class="flex items-center justify-center h-16">
                            <p class="font-mono text-xs text-gray-500">
                                <?php echo e(__('tables::table.messages.noRecords')); ?>

                            </p>
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/tables/resources/views/components/table.blade.php ENDPATH**/ ?>