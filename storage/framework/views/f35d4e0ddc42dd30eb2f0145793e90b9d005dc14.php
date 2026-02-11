<?php if(! isset($__env->__pushonce_filament_styles_rich_editor_component)): $__env->__pushonce_filament_styles_rich_editor_component = 1; $__env->startPush('filament-styles'); ?>
    <link rel="stylesheet" href="https://unpkg.com/trix@1.3.1/dist/trix.css">

    <style>
        trix-editor:empty:not(:focus)::before {
            @apply  text-gray-400 opacity-100;
        }
    </style>
<?php $__env->stopPush(); endif; ?>

<?php if(! isset($__env->__pushonce_filament_scripts_rich_editor_component)): $__env->__pushonce_filament_scripts_rich_editor_component = 1; $__env->startPush('filament-scripts'); ?>
    <script src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>

    <script>
        Trix.config.blockAttributes.heading = {
            tagName: "h2",
            terminal: true,
            breakOnReturn: true,
            group: false
        }

        Trix.config.blockAttributes.subHeading = {
            tagName: "h3",
            terminal: true,
            breakOnReturn: true,
            group: false
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
        x-data="{
            value: <?php if ((object) ($formComponent->getName()) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()->value()); ?>')<?php echo e($formComponent->getName()->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()); ?>')<?php endif; ?>.defer,
        }"
        <?php if (! ($formComponent->isDisabled())): ?>
            x-init="
                $refs.trix?.editor?.loadHTML(value)

                $watch('value', () => {
                    if (document.activeElement === $refs.trix) return

                    $refs.trix?.editor?.loadHTML(value)
                })
            "
            x-on:trix-attachment-add="
                if (! $event.attachment.file) return

                let attachment = $event.attachment

                let formData = new FormData()
                formData.append('directory', '<?php echo e($formComponent->getAttachmentDirectory()); ?>')
                formData.append('disk', '<?php echo e($formComponent->getAttachmentDiskName()); ?>')
                formData.append('file', attachment.file)

                fetch('<?php echo e($formComponent->getAttachmentUploadUrl()); ?>', {
                    body: formData,
                    credentials: 'same-origin',
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    },
                    method: 'POST',
                })
                .then((response) => response.text())
                .then((url) => {
                    attachment.setAttributes({
                        url: url,
                        href: url,
                    })
                })
            "
            x-on:trix-change="value = $event.target.value"
        <?php endif; ?>
        x-cloak
        wire:ignore
    >
        <?php if (! ($formComponent->isDisabled())): ?>
            <input id="trix-value-<?php echo e($formComponent->getId()); ?>" type="hidden" />

            <trix-toolbar id="trix-toolbar-<?php echo e($formComponent->getId()); ?>">
                <div class="trix-button-row">
                    <?php if($formComponent->hasToolbarButton(['bold', 'italic', 'strike', 'link'])): ?>
                        <span class="trix-button-group trix-button-group--text-tools"
                              data-trix-button-group="text-tools">
                            <?php if($formComponent->hasToolbarButton('bold')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-bold"
                                        data-trix-attribute="bold" data-trix-key="b" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.bold')); ?>"
                                        tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.bold')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('italic')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-italic"
                                        data-trix-attribute="italic" data-trix-key="i" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.italic')); ?>"
                                        tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.italic')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('strike')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-strike"
                                        data-trix-attribute="strike" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.strike')); ?>"
                                        tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.strike')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('link')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-link"
                                        data-trix-attribute="href" data-trix-action="link" data-trix-key="k"
                                        title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.link')); ?>"
                                        tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.link')); ?></button>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>

                    <?php if($formComponent->hasToolbarButton(['heading1', 'heading', 'subHeading'])): ?>
                        <span class="trix-button-group trix-button-group--heading-tools"
                              data-trix-button-group="heading-tools">
                            <?php if($formComponent->hasToolbarButton('title')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-heading-1"
                                        data-trix-attribute="heading1" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.title')); ?>"
                                        tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.title')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('heading')): ?>
                                <button type="button" class="trix-button" data-trix-attribute="heading"
                                        title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.heading')); ?>" tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.heading')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('subheading')): ?>
                                <button type="button" class="trix-button" data-trix-attribute="subHeading"
                                        title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.subheading')); ?>" tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.subheading')); ?></button>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>

                    <?php if($formComponent->hasToolbarButton(['quote', 'code', 'bullet', 'number'])): ?>
                        <span class="trix-button-group trix-button-group--block-tools"
                              data-trix-button-group="block-tools">
                            <?php if($formComponent->hasToolbarButton('quote')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-quote"
                                        data-trix-attribute="quote" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.quote')); ?>" tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.quote')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('code')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-code"
                                        data-trix-attribute="code" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.code')); ?>" tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.code')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('bullet')): ?>
                                <button type="button"
                                        class="trix-button trix-button--icon trix-button--icon-bullet-list"
                                        data-trix-attribute="bullet" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.bullet')); ?>" tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.bullet')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('number')): ?>
                                <button type="button"
                                        class="trix-button trix-button--icon trix-button--icon-number-list"
                                        data-trix-attribute="number" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.number')); ?>" tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.number')); ?></button>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>

                    <?php if($formComponent->hasToolbarButton('attachFiles')): ?>
                        <span class="trix-button-group trix-button-group--file-tools"
                              data-trix-button-group="file-tools">
                            <button type="button" class="trix-button trix-button--icon trix-button--icon-attach"
                                    data-trix-action="attachFiles" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.attachFiles')); ?>"
                                    tabindex="-1"><?php echo e(__('forms::fields.richEditor.toolbarButtons.attachFiles')); ?></button>
                        </span>
                    <?php endif; ?>

                    <?php if($formComponent->hasToolbarButton(['undo', 'redo'])): ?>
                        <span class="trix-button-group-spacer"></span>

                        <span class="trix-button-group trix-button-group--history-tools"
                              data-trix-button-group="history-tools">
                            <?php if($formComponent->hasToolbarButton('undo')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-undo"
                                        data-trix-action="undo" data-trix-key="z" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.undo')); ?>" tabindex="-1" disabled><?php echo e(__('forms::fields.richEditor.toolbarButtons.undo')); ?></button>
                            <?php endif; ?>

                            <?php if($formComponent->hasToolbarButton('redo')): ?>
                                <button type="button" class="trix-button trix-button--icon trix-button--icon-redo"
                                        data-trix-action="redo" data-trix-key="shift+z" title="<?php echo e(__('forms::fields.richEditor.toolbarButtons.redo')); ?>" tabindex="-1"
                                        disabled><?php echo e(__('forms::fields.richEditor.toolbarButtons.redo')); ?></button>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="trix-dialogs" data-trix-dialogs>
                    <div class="trix-dialog trix-dialog--link" data-trix-dialog="href"
                         data-trix-dialog-attribute="href">
                        <div class="trix-dialog__link-fields">
                            <input type="url" name="href" class="trix-input trix-input--dialog"
                                   placeholder="<?php echo e(__('forms::fields.richEditor.dialogs.link.placeholder')); ?>" aria-label="<?php echo e(__('forms::fields.richEditor.dialogs.link.label')); ?>" required data-trix-input
                                   disabled="disabled">

                            <div class="trix-button-group">
                                <input type="button" class="trix-button trix-button--dialog" value="<?php echo e(__('forms::fields.richEditor.dialogs.link.buttons.link')); ?>"
                                       data-trix-method="setAttribute">

                                <input type="button" class="trix-button trix-button--dialog" value="<?php echo e(__('forms::fields.richEditor.dialogs.link.buttons.unlink')); ?>"
                                       data-trix-method="removeAttribute">
                            </div>
                        </div>
                    </div>
                </div>
            </trix-toolbar>

            <trix-editor
                <?php echo e($formComponent->isAutofocused() ? 'autofocus' : null); ?>

                id="<?php echo e($formComponent->getId()); ?>"
                input="trix-value-<?php echo e($formComponent->getId()); ?>"
                placeholder="<?php echo e(__($formComponent->getPlaceholder())); ?>"
                toolbar="trix-toolbar-<?php echo e($formComponent->getId()); ?>"
                x-ref="trix"
                class="block w-full prose placeholder-gray-400 placeholder-opacity-100 bg-white border-gray-300 rounded shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 max-w-none"
                <?php echo Filament\format_attributes($formComponent->getExtraAttributes()); ?>

            />
        <?php else: ?>
            <div x-html="value" class="p-3 prose border border-gray-300 rounded shadow-sm"></div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/rich-editor.blade.php ENDPATH**/ ?>