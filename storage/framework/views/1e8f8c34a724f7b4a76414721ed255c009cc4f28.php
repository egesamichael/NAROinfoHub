<?php if(! isset($__env->__pushonce_filament_scripts_tags_input_component)): $__env->__pushonce_filament_scripts_tags_input_component = 1; $__env->startPush('filament-scripts'); ?>
    <script>
        function tagsInput(config) {
            return {
                hasError: false,

                newTag: '',

                separator: config.separator,

                tags: [],

                value: config.value,

                createTag: function () {
                    this.newTag = this.newTag.trim()

                    if (this.newTag === '' || this.tags.includes(this.newTag)) {
                        this.hasError = true

                        return
                    }

                    this.tags.push(this.newTag)

                    this.newTag = ''
                },

                deleteTag: function (tagToDelete) {
                    this.tags = this.tags.filter((tag) => tag !== tagToDelete)
                },

                init: function () {
                    if (this.value !== '' && this.value !== null) this.tags = this.value.trim().split(this.separator).filter(tag => tag !== '')

                    this.$watch('newTag', () => this.hasError = false)

                    this.$watch('tags', () => {
                        this.value = this.tags.join(this.separator)
                    })

                    this.$watch('value', () => {
                        try {
                            let expectedTags = this.value.trim().split(this.separator).filter(tag => tag !== '')

                            if (
                                this.tags.length === expectedTags.length &&
                                this.tags.filter((tag) => ! expectedTags.includes(tag)).length === 0
                            ) return

                            this.tags = expectedTags
                        } catch (error) {
                            this.tags = []
                        }
                    })
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
    <div
        x-data="tagsInput({
            separator: '<?php echo e($formComponent->getSeparator()); ?>',
            <?php if(Str::of($formComponent->getBindingAttribute())->startsWith('wire:model')): ?>
                value: <?php if ((object) ($formComponent->getName()) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()->value()); ?>')<?php echo e($formComponent->getName()->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()); ?>')<?php endif; ?><?php echo e(Str::of($formComponent->getBindingAttribute())->after('wire:model')); ?>,
            <?php endif; ?>
        })"
        x-init="init()"
        <?php echo $formComponent->getId() ? "id=\"{$formComponent->getId()}\"" : null; ?>

        <?php echo Filament\format_attributes($formComponent->getExtraAttributes()); ?>

    >
        <?php if (! (Str::of($formComponent->getBindingAttribute())->startsWith(['wire:model', 'x-model']))): ?>
            <input
                x-model="value"
                <?php echo $formComponent->getName() ? "{$formComponent->getBindingAttribute()}=\"{$formComponent->getName()}\"" : null; ?>

                type="hidden"
            />
        <?php endif; ?>

        <div x-show="tags.length || <?php echo e($formComponent->isDisabled() ? 'false' : 'true'); ?>" class="rounded shadow-sm border overflow-hidden focus-within:border-blue-300 focus-within:ring focus-within:ring-blue-200 focus-within:ring-opacity-50 <?php echo e($errors->has($formComponent->getName()) ? 'border-danger-600 motion-safe:animate-shake' : 'border-gray-300'); ?>">
            <?php if (! ($formComponent->isDisabled())): ?>
                <input
                    autocomplete="off"
                    <?php echo $formComponent->isAutofocused() ? 'autofocus' : null; ?>

                    <?php echo $formComponent->getPlaceholder() ? 'placeholder="' . __($formComponent->getPlaceholder()) . '"' : null; ?>

                    type="text"
                    x-on:keydown.enter.stop.prevent="createTag()"
                    x-model="newTag"
                    class="block w-full placeholder-gray-400 focus:placeholder-gray-500 placeholder-opacity-100 border-0"
                    x-bind:class="{ 'text-danger-700': hasError }"
                />
            <?php endif; ?>

            <div
                x-show="tags.length"
                class="bg-white space-x-1 rtl:space-x-reverse relative w-full pl-3 pr-10 py-2 text-left <?php echo e($formComponent->isDisabled() ? 'text-gray-500' : 'border-t'); ?> <?php echo e($errors->has($formComponent->getName()) ? 'border-danger-600' : 'border-gray-300'); ?>"
            >
                <template class="inline" x-for="tag in tags" x-bind:key="tag">
                    <button
                        <?php if (! ($formComponent->isDisabled())): ?>
                            x-on:click="deleteTag(tag)"
                        <?php endif; ?>
                        type="button"
                        class="my-1 truncate max-w-full inline-flex space-x-2 rtl:space-x-reverse items-center font-mono text-xs py-1 px-2 border border-gray-300 bg-gray-100 text-gray-800 rounded shadow-sm inline-block relative <?php if (! ($formComponent->isDisabled())): ?> cursor-pointer transition duration-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 hover:bg-gray-200 transition-colors duration-200 <?php else: ?> cursor-default <?php endif; ?>"
                    >
                        <span x-text="tag"></span>

                        <?php if (! ($formComponent->isDisabled())): ?>
                            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-s-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </button>
                </template>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/tags-input.blade.php ENDPATH**/ ?>