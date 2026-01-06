<div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.app-header','data' => ['title' => $title]]); ?>
<?php $component->withName('filament::app-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.app-content','data' => []]); ?>
<?php $component->withName('filament::app-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <section
            aria-label="<?php echo e(__('filament::widgets.title')); ?>"
            class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8"
        >
            <?php if(config('filament.widgets.default.account', true)): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card','data' => ['class' => 'flex']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex']); ?>
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <?php if (isset($component)) { $__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e = $component; } ?>
<?php $component = $__env->getContainer()->make(Filament\View\Components\Avatar::class, ['user' => \Filament\Filament::auth()->user(),'size' => 160]); ?>
<?php $component->withName('filament-avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-20 h-20 rounded-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e)): ?>
<?php $component = $__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e; ?>
<?php unset($__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e); ?>
<?php endif; ?>

                        <div class="space-y-1">
                            <h2 class="text-2xl"><?php echo e(__('filament::dashboard.widgets.account.heading', ['name' => \Filament\Filament::auth()->user()->name])); ?></h2>
                            <p class="text-sm"><a href="<?php echo e(route('filament.account')); ?>" class="link"><?php echo e(__('filament::dashboard.widgets.account.links.account.label')); ?></a></p>
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(config('filament.widgets.default.info', true)): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card','data' => []]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <div class="flex items-center justify-between h-full">
                        <div class="w-full space-y-6">
                            <div class="flex items-center justify-between w-full space-x-4 rtl:space-x-reverse">
                                <a href="https://filamentadmin.com" target="_blank" class="transition-colors duration-200 hover:text-primary-700">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.logo','data' => ['class' => 'h-auto w-28']]); ?>
<?php $component->withName('filament::logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-auto w-28']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </a>

                                <?php if($version = \Filament\Filament::version()): ?>
                                    <a href="https://github.com/laravel-filament/filament/releases" target="_blank" class="px-4 py-2 font-mono text-xs text-gray-800 transition duration-200 bg-white border border-gray-300 rounded shadow-sm cursor-pointer focus:ring focus:ring-opacity-50 hover:bg-gray-100 focus:ring-primary-200">
                                        <?php echo e($version); ?>

                                    </a>
                                <?php endif; ?>
                            </div>

                            <ul class="space-y-1 text-sm">
                                <li><a href="https://filamentadmin.com/docs" target="_blank" class="link"><?php echo e(__('filament::dashboard.widgets.filament.links.documentation.label')); ?></a></li>
                                <li><a href="https://github.com/laravel-filament/filament" target="_blank" class="link"><?php echo e(__('filament::dashboard.widgets.filament.links.repository.label')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php $__currentLoopData = \Filament\Filament::getWidgets(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(\Livewire\Livewire::getAlias($widget))->html();
} elseif ($_instance->childHasBeenRendered('l2810664671-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2810664671-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2810664671-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2810664671-0');
} else {
    $response = \Livewire\Livewire::mount(\Livewire\Livewire::getAlias($widget));
    $html = $response->html();
    $_instance->logRenderedChild('l2810664671-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/dashboard.blade.php ENDPATH**/ ?>