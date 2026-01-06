<nav aria-label="primary" <?php echo e($attributes); ?>>
    <ol>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.nav-link','data' => ['activeRule' => $item->activeRule,'icon' => $item->icon,'label' => $item->label,'url' => $item->url]]); ?>
<?php $component->withName('filament::nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active-rule' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->activeRule),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->icon),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->label),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->url)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</nav>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/components/nav.blade.php ENDPATH**/ ?>