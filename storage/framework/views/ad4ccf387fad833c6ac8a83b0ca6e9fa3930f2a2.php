<?php if(! isset($__env->__pushonce_filament_scripts_key_value_component)): $__env->__pushonce_filament_scripts_key_value_component = 1; $__env->startPush('filament-scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js" integrity="sha512-5x7t0fTAVo9dpfbp3WtE2N6bfipUwk7siViWncdDoSz2KwOqVC1N9fDxEOzk0vTThOua/mglfF8NO7uVDLRC8Q==" crossorigin="anonymous"></script>

    <script>
        function keyValue(config) {
            return {
                canAddRows: config.canAddRows,

                canDeleteRows: config.canDeleteRows,

                isSortable: config.isSortable,

                rows: [{ key: null, value: null }],

                sortable: null,

                value: config.value,

                init: function () {
                    if (! this.value) {
                        this.value = {}
                    }

                    if (this.value && Object.keys(this.value).length > 0) {
                        this.rows = []

                        Object.entries(this.value).forEach(([key, value]) => {
                            this.rows.push({ key, value })
                        })
                    }

                    this.$watch('value', (newValues) => {
                        if (newValues && typeof newValues === 'object') {
                            let index = 0

                            for (const [key, value] of Object.entries(newValues)) {
                                if (typeof this.rows['index'] === 'undefined') {
                                    this.rows[index] = { key, value }
                                } else {
                                    this.rows[index].key = key
                                    this.rows[index].value = value
                                }

                                index++
                            }
                        }
                    })

                    if (this.isSortable) {
                        this.sortable = new Sortable(this.$refs.tableBody, {
                            handle: '[data-sort-handle]',
                            animation: 250,
                            onSort: ($event) => {
                                this.moveRow($event.oldIndex, $event.newIndex)
                            }
                        })
                    }
                },

                addRow: function () {
                    if (! this.canAddRows) return

                    this.rows.push({ key: '', value: '' })
                },

                deleteRow: function (index) {
                    if (! this.canDeleteRows) return

                    this.rows.splice(index, 1)

                    if (this.rows.length <= 0) {
                        this.addRow()
                    }

                    this.updateLivewire()
                },

                moveRow: function (from, to) {
                    if (! this.isSortable) return

                    this.rows.splice(to, 0, this.rows.splice(from, 1)[0])

                    this.updateLivewire()
                },

                shouldShowDeleteButton: function () {
                    if (this.rows.length > 1) return true

                    return this.canDeleteRows && this.rows.length > 0 && !!this.rows[0].key
                },

                updateKey: function (index, key) {
                    this.rows[index].key = key

                    this.updateLivewire()
                },

                updateValue: function (index, value) {
                    this.rows[index].value = value

                    this.updateLivewire()
                },

                updateLivewire: function (index = null) {
                    const rows = this.rows.reduce((accum, { key, value }) => {
                        if (! key) return accum

                        accum[key] = value

                        return accum
                    }, {})

                    this.value = rows
                },
            }
        }
    </script>
<?php $__env->stopPush(); endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.field-group','data' => ['columnSpan' => $formComponent->getColumnSpan(),'errorKey' => $formComponent->getName(),'for' => $formComponent->getId(),'helpMessage' => $formComponent->getHelpMessage(),'hint' => $formComponent->getHint(),'label' => $formComponent->getLabel(),'required' => $formComponent->isRequired()]]); ?>
<?php $component->withName('forms::field-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['column-span' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getColumnSpan()),'error-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getName()),'for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getId()),'help-message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getHelpMessage()),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getHint()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getLabel()),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->isRequired())]); ?>
    <div x-data="keyValue({
        canAddRows: <?php echo e(json_encode($formComponent->canAddRows())); ?>,
        canDeleteRows: <?php echo e(json_encode($formComponent->canDeleteRows())); ?>,
        isSortable: <?php echo e(json_encode($formComponent->isSortable())); ?>,
        name: <?php echo e(json_encode($formComponent->getName())); ?>,
        <?php if(Str::of($formComponent->getBindingAttribute())->startsWith('wire:model')): ?>
            value: <?php if ((object) ($formComponent->getName()) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()->value()); ?>')<?php echo e($formComponent->getName()->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()); ?>')<?php endif; ?><?php echo e(Str::of($formComponent->getBindingAttribute())->after('wire:model')); ?>,
        <?php endif; ?>
    })"
        x-init="init"
        class="space-y-4"
        <?php echo Filament\format_attributes($formComponent->getExtraAttributes()); ?>

    >
        <div class="overflow-x-auto bg-white border border-gray-300 rounded">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-200">
                    <tr class="divide-x divide-gray-300">
                        <?php if($formComponent->isSortable() && $formComponent->getSortButtonLabel()): ?>
                            <th scope="col" x-show="isSortable">
                                <span class="sr-only"><?php echo e(__($formComponent->getSortButtonLabel())); ?></span>
                            </th>
                        <?php endif; ?>

                        <th class="px-6 py-3 text-left text-gray-600" scope="col">
                            <span class="text-xs font-medium tracking-wider uppercase">
                                <?php echo e(__($formComponent->getKeyLabel())); ?>

                            </span>
                        </th>
                        <th class="px-6 py-3 text-left text-gray-600" scope="col">
                            <span class="text-xs font-medium tracking-wider uppercase">
                                <?php echo e(__($formComponent->getValueLabel())); ?>

                            </span>
                        </th>

                        <?php if($formComponent->canDeleteRows() && $formComponent->getDeleteButtonLabel()): ?>
                            <th scope="col" x-show="shouldShowDeleteButton()">
                                <span class="sr-only"><?php echo e(__($formComponent->getDeleteButtonLabel())); ?></span>
                            </th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody class="text-sm leading-tight divide-y divide-gray-200" x-ref="tableBody" wire:ignore>
                    <template x-for="(row, index, collection) in rows" x-bind:key="row.key">
                        <tr
                            x-bind:class="{ 'bg-gray-50': index % 2 }"
                            <?php if($formComponent->isSortable()): ?>
                                x-bind:data-sort-index="index"
                                draggable="true"
                            <?php endif; ?>
                        >
                            <?php if($formComponent->isSortable()): ?>
                                <td x-show="isSortable" class="w-10 border-r border-gray-300 whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <button class="text-gray-600 hover:text-gray-800" data-sort-handle>
                                            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-menu-alt-4'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                                        </button>
                                    </div>
                                </td>
                            <?php endif; ?>
                            <td class="border-r border-gray-300 whitespace-nowrap">
                                <input
                                    type="text"
                                    placeholder="<?php echo e(__($formComponent->getKeyPlaceholder())); ?>"
                                    class="w-full px-6 py-4 font-mono text-sm placeholder-gray-400 placeholder-opacity-100 bg-transparent border-0 focus:placeholder-gray-500 focus:border-1 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                    x-bind:value="rows[index].key"
                                    x-on:change="updateKey(index, $event.target.value)"
                                    <?php if (! ($formComponent->canEditKeys())): ?>
                                        disabled
                                    <?php endif; ?>
                                >
                            </td>
                            <td class="whitespace-nowrap">
                                <input
                                    type="text"
                                    placeholder="<?php echo e(__($formComponent->getValuePlaceholder())); ?>"
                                    class="w-full px-6 py-4 font-mono text-sm placeholder-gray-400 placeholder-opacity-100 bg-transparent border-0 focus:placeholder-gray-500 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                    x-bind:value="rows[index].value"
                                    x-on:change="updateValue(index, $event.target.value)"
                                >
                            </td>
                            <?php if($formComponent->canDeleteRows()): ?>
                                <td x-show="shouldShowDeleteButton()" class="w-10 border-l border-gray-300 whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <button
                                            type="button"
                                            x-on:click="deleteRow(index)"
                                            title="<?php echo e(__($formComponent->getDeleteButtonLabel())); ?>"
                                            class="text-danger-600 hover:text-danger-700"
                                        >
                                            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                                        </button>
                                    </div>
                                </td>
                            <?php endif; ?>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <?php if($formComponent->canAddRows()): ?>
            <div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.button','data' => ['type' => 'button','xOn:click' => 'addRow']]); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'button','x-on:click' => 'addRow']); ?>
                    <?php echo e(__($formComponent->getAddButtonLabel())); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\packages\forms\src/../resources/views/components/key-value.blade.php ENDPATH**/ ?>