<?php
    $columnSpanClass = [
        '',
        'lg:col-span-1',
        'lg:col-span-2',
        'lg:col-span-3',
        'lg:col-span-4',
        'lg:col-span-5',
        'lg:col-span-6',
        'lg:col-span-7',
        'lg:col-span-8',
        'lg:col-span-9',
        'lg:col-span-10',
        'lg:col-span-11',
        'lg:col-span-12',
    ][$formComponent->getColumnSpan()]
?>

<section
    x-data="{ open: <?php echo e($formComponent->isCollapsed() ? 'false' : 'true'); ?> }"
    x-on:open.window="if ($event.detail === '<?php echo e($formComponent->getId()); ?>') open = true"
    aria-labelledby="<?php echo e($formComponent->getId()); ?>-heading"
    class="space-y-4 p-4 rounded border border-gray-200 bg-gray-50 <?php echo e($columnSpanClass); ?>"
>
    <div class="flex items-start justify-between space-x-4 rtl:space-x-reverse">
        <div class="space-y-1">
            <?php if($heading = $formComponent->getHeading()): ?>
                <h2 id="<?php echo e($formComponent->getId()); ?>-heading" class="text-lg font-medium leading-tight">
                    <?php echo e(__($heading)); ?>

                </h2>
            <?php endif; ?>

            <?php if($subheading = $formComponent->getSubheading()): ?>
                <p class="text-sm text-gray-500">
                    <?php echo e(__($subheading)); ?>

                </p>
            <?php endif; ?>
        </div>

        <div class="flex">
            <?php if($formComponent->isCollapsible()): ?>
                <button
                    aria-controls="<?php echo e($formComponent->getId()); ?>-content"
                    x-on:click.prevent="open = ! open"
                    class="flex p-2 -m-2 text-gray-400 transition-colors duration-200 hover:text-gray-700"
                >
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4','x-show' => '!open']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4','x-show' => 'open']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>

                    <span class="sr-only"><?php echo e(__('Toggle section content')); ?></span>
                </button>
            <?php endif; ?>
        </div>
    </div>

    <div id="<?php echo e($formComponent->getId()); ?>-content" x-show.transition="open" :aria-expanded="open.toString()">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.form','data' => ['schema' => $formComponent->getSchema(),'columns' => $formComponent->getColumns()]]); ?>
<?php $component->withName('forms::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['schema' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getSchema()),'columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getColumns())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</section>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/section.blade.php ENDPATH**/ ?>