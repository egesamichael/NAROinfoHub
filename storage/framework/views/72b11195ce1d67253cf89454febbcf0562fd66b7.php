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

<div
    x-data="{ tab: '<?php echo e(count($formComponent->getTabsConfig()) ? array_key_first($formComponent->getTabsConfig()) : null); ?>', tabs: <?php echo e(json_encode($formComponent->getTabsConfig())); ?> }"
    x-on:open.window="if ($event.detail in tabs) tab = $event.detail"
    x-cloak
    <?php echo $formComponent->getId() ? "id=\"{$formComponent->getId()}\"" : null; ?>

    class="<?php echo e($columnSpanClass); ?> bg-white border border-gray-200 rounded p-4 md:p-6"
>
    <div class="-m-4 md:-m-6">
        <div <?php echo __($formComponent->getLabel()) ? 'aria-label="' . __($formComponent->getLabel()) . '"' : null; ?> role="tablist"
             class="flex overflow-hidden bg-gray-100 rounded-t">
            <?php $__currentLoopData = $formComponent->getTabsConfig(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabId => $tabLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button type="button"
                        aria-controls="<?php echo e($tabId); ?>-tab"
                        x-bind:aria-selected="tab === '<?php echo e($tabId); ?>'"
                        x-on:click="tab = '<?php echo e($tabId); ?>'"
                        role="tab"
                        x-bind:tabindex="tab === '<?php echo e($tabId); ?>' ? 0 : -1"
                        class="p-3 text-sm font-medium leading-tight border-r border-gray-200 md:px-6"
                        x-bind:class="{ 'bg-white': tab === '<?php echo e($tabId); ?>' }"
                >
                    <?php echo e(__($tabLabel)); ?>

                </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php $__currentLoopData = $formComponent->getSchema(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($tab->render()); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/tabs.blade.php ENDPATH**/ ?>