<?php if(! isset($__env->__pushonce_filament_styles_file_upload_component)): $__env->__pushonce_filament_styles_file_upload_component = 1; $__env->startPush('filament-styles'); ?>
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.css">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <style>
        .filepond--root {
            font-family: inherit;
            border: 1px dashed var(--f-gray-300);
            border-radius: 0.25rem;
            overflow: hidden
        }

        .filepond--panel-root {
            background-color: #fff;
        }

        .filepond--drop-label label {
            color: inherit;
            font-size: .8125rem;
            line-height: 1.25;
            cursor: pointer;
        }

        .filepond--label-action {
            font-weight: 500;
        }
    </style>
<?php $__env->stopPush(); endif; ?>

<?php if(! isset($__env->__pushonce_filament_scripts_file_upload_component)): $__env->__pushonce_filament_scripts_file_upload_component = 1; $__env->startPush('filament-scripts'); ?>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<?php $__env->stopPush(); endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.field-group','data' => ['columnSpan' => $formComponent->getColumnSpan(),'errorKey' => $formComponent->getName(),'for' => $formComponent->getId(),'helpMessage' => $formComponent->getHelpMessage(),'hint' => $formComponent->getHint(),'label' => $formComponent->getLabel(),'required' => $formComponent->isRequired()]]); ?>
<?php $component->withName('forms::field-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['column-span' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getColumnSpan()),'error-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getName()),'for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getId()),'help-message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getHelpMessage()),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getHint()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getLabel()),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->isRequired())]); ?>
    <div
        x-data="{
            disk: '<?php echo e($formComponent->getDiskName()); ?>',
            files: [],
            initialUrl: <?php echo e($formComponent->getUploadedFileUrl() ? "'{$formComponent->getUploadedFileUrl()}'" : 'null'); ?>,
            name: '<?php echo e($formComponent->getName()); ?>',
            pond: null,
            value: <?php if ((object) ($formComponent->getName()) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()->value()); ?>')<?php echo e($formComponent->getName()->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($formComponent->getName()); ?>')<?php endif; ?><?php echo e(Str::of($formComponent->getBindingAttribute())->after('wire:model')); ?>,
        }"
        x-init="
            FilePond.registerPlugin(FilePondPluginFileValidateSize)
            FilePond.registerPlugin(FilePondPluginFileValidateType)
            FilePond.registerPlugin(FilePondPluginImageCrop)
            FilePond.registerPlugin(FilePondPluginImageExifOrientation)
            FilePond.registerPlugin(FilePondPluginImagePreview)
            FilePond.registerPlugin(FilePondPluginImageResize)
            FilePond.registerPlugin(FilePondPluginImageTransform)

            if (initialUrl) {
                files = [{
                    source: initialUrl,
                    options: {
                        type: 'local',
                    },
                }]
            }

            pond = FilePond.create($refs.input, {
                acceptedFileTypes: <?php echo e(json_encode($formComponent->getAcceptedFileTypes())); ?>,
                files: files,
                <?php echo e($formComponent->getImageCropAspectRatio() !== null ? "imageCropAspectRatio: '{$formComponent->getImageCropAspectRatio()}'," : null); ?>

                <?php echo e($formComponent->getImagePreviewHeight() !== null ? "imagePreviewHeight: {$formComponent->getImagePreviewHeight()}," : null); ?>

                <?php echo e($formComponent->getImageResizeTargetHeight() !== null ? "imageResizeTargetHeight: {$formComponent->getImageResizeTargetHeight()}," : null); ?>

                <?php echo e($formComponent->getImageResizeTargetWidth() !== null ? "imageResizeTargetWidth: {$formComponent->getImageResizeTargetWidth()}," : null); ?>

                <?php echo e(__($formComponent->getPlaceholder()) !== null ? 'labelIdle: \'' . __($formComponent->getPlaceholder()) . '\',' : null); ?>

                <?php echo e($formComponent->getMaxSize() !== null ? "maxFileSize: '{$formComponent->getMaxSize()} KB'," : null); ?>

                <?php echo e($formComponent->getMinSize() !== null ? "minFileSize: '{$formComponent->getMinSize()} KB'," : null); ?>

                server: {
                    load: (source, load, error, progress, abort, headers) => {
                        fetch(source).then((response) => {
                            response.blob().then((blob) => {
                                load(blob)
                            })
                        })
                    },
                    process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        window.livewire.find('<?php echo e($_instance->id); ?>').upload(
                            '<?php echo e($formComponent->getTemporaryUploadedFilePropertyName()); ?>',
                            file,
                            (uploadedFilename) => load(uploadedFilename),
                            () => error(),
                            (event) => progress(event.detail.progress)
                        )
                    },
                    remove: (source, load, error) => {
                        window.livewire.find('<?php echo e($_instance->id); ?>').removeUploadedFile('<?php echo e($formComponent->getName()); ?>').then(() => {
                            load()
                        })
                    },
                    revert: (uniqueFileId, load, error) => {
                        window.livewire.find('<?php echo e($_instance->id); ?>').clearTemporaryUploadedFile('<?php echo e($formComponent->getName()); ?>').then(() => {
                            load()
                        })
                    },
                },
                styleButtonProcessItemPosition: '<?php echo e($formComponent->getUploadButtonPosition()); ?>',
                styleButtonRemoveItemPosition: '<?php echo e($formComponent->getRemoveUploadButtonPosition()); ?>',
                styleLoadIndicatorPosition: '<?php echo e($formComponent->getLoadingIndicatorPosition()); ?>',
                <?php echo e($formComponent->getPanelAspectRatio() !== null ? "stylePanelAspectRatio: '{$formComponent->getPanelAspectRatio()}'," : null); ?>

                <?php echo e($formComponent->getPanelLayout() !== null ? "stylePanelLayout: '{$formComponent->getPanelLayout()}'," : null); ?>

                styleProgressIndicatorPosition: '<?php echo e($formComponent->getUploadProgressIndicatorPosition()); ?>',
            })

            $watch('value', () => {
                if (! value) {
                    pond.removeFiles()
                }

                window.livewire.find('<?php echo e($_instance->id); ?>').getUploadedFileUrl(name, disk).then((uploadedFileUrl) => {
                    if (uploadedFileUrl) {
                        pond.files = [{
                            source: uploadedFileUrl,
                            options: {
                                type: 'local',
                            },
                        }]
                    } else {
                        pond.files = []
                    }
                })
            })
        "
        wire:ignore
        <?php echo Filament\format_attributes($formComponent->getExtraAttributes()); ?>

    >
        <input
            x-ref="input"
            <?php echo e($formComponent->isDisabled() ? 'disabled' : ''); ?>

            type="file"
        />
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/file-upload.blade.php ENDPATH**/ ?>