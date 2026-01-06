<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.layouts.base','data' => ['title' => $title]]); ?>
<?php $component->withName('filament::layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
    <a href="#content" class="sr-only">Skip to content</a>

    <div class="relative overflow-hidden"
         role="group"
         tabindex="-1"
         x-data="{ headerIsOpen: false }"
         @keydown.escape.window="headerIsOpen = false"
         x-on:resize.window="if (window.outerWidth > 768) headerIsOpen = false"
    >
        <div class="fixed z-20 flex w-64 h-screen transition-transform duration-200 transform ltr:md:translate-x-0 rtl:md:translate-x-0"
             :class="headerIsOpen ? 'translate-x-0' : 'ltr:-translate-x-full rtl:translate-x-full'">
            <header role="banner"
                    tabindex="-1"
                    id="banner"
                    class="flex flex-col flex-grow space-y-4 overflow-y-auto text-gray-400 bg-gray-800 shadow-lg md:shadow-none">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.branding.app','data' => []]); ?>
<?php $component->withName('filament::branding.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal1970f138bcbadbfe3ec6e3e6014d1ed2ad2dc6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(Filament\View\Components\Nav::class, []); ?>
<?php $component->withName('filament-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-grow px-4 overflow-y-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1970f138bcbadbfe3ec6e3e6014d1ed2ad2dc6f3)): ?>
<?php $component = $__componentOriginal1970f138bcbadbfe3ec6e3e6014d1ed2ad2dc6f3; ?>
<?php unset($__componentOriginal1970f138bcbadbfe3ec6e3e6014d1ed2ad2dc6f3); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.dropdown','data' => ['class' => 'flex items-center flex-grow w-full p-4 space-x-3 rtl:space-x-reverse text-left transition-colors duration-200 hover:text-white hover:bg-gray-900']]); ?>
<?php $component->withName('filament::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex items-center flex-grow w-full p-4 space-x-3 rtl:space-x-reverse text-left transition-colors duration-200 hover:text-white hover:bg-gray-900']); ?>
                     <?php $__env->slot('button', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e = $component; } ?>
<?php $component = $__env->getContainer()->make(Filament\View\Components\Avatar::class, ['user' => \Filament\Filament::auth()->user(),'size' => 32]); ?>
<?php $component->withName('filament-avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-8 h-8 rounded-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e)): ?>
<?php $component = $__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e; ?>
<?php unset($__componentOriginala87b7fe59b98de7d5cd2336ce6b38f61daa9628e); ?>
<?php endif; ?>

                        <span class="flex-grow text-sm font-medium leading-tight"><?php echo e(\Filament\Filament::auth()->user()->name); ?></span>
                     <?php $__env->endSlot(); ?>

                    <?php if(\Filament\Filament::auth()->user()->isFilamentAdmin()): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.dropdown-link','data' => ['href' => ''.e(route('filament.users.index')).'']]); ?>
<?php $component->withName('filament::dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('filament.users.index')).'']); ?>
                            <?php echo e(__('filament::nav.dropdown.users.label')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.dropdown-link','data' => ['href' => ''.e(route('filament.account')).'']]); ?>
<?php $component->withName('filament::dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('filament.account')).'']); ?>
                        <?php echo e(__('filament::nav.dropdown.account.label')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filament.core.auth.logout', ['class' => 'w-full px-4 py-2 text-gray-600 transition-colors duration-200 hover:bg-gray-200'])->html();
} elseif ($_instance->childHasBeenRendered('Hyu8oNV')) {
    $componentId = $_instance->getRenderedChildComponentId('Hyu8oNV');
    $componentTag = $_instance->getRenderedChildComponentTagName('Hyu8oNV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Hyu8oNV');
} else {
    $response = \Livewire\Livewire::mount('filament.core.auth.logout', ['class' => 'w-full px-4 py-2 text-gray-600 transition-colors duration-200 hover:bg-gray-200']);
    $html = $response->html();
    $_instance->logRenderedChild('Hyu8oNV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </header>

            <button
                type="button"
                aria-controls="banner"
                @click.prevent="headerIsOpen = false"
                :aria-expanded="headerIsOpen"
                x-cloak
                x-show.opacity="headerIsOpen"
                class="absolute ltr:right-0 rtl:left-0 p-3 text-gray-200 transition-colors duration-200 transform ltr:translate-x-full rtl:-translate-x-full md:hidden top-2 hover:text-white">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6 h-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
            </button>
        </div>

        <span class="absolute inset-0 z-10 bg-gray-800 bg-opacity-50 md:hidden" x-cloak x-show="headerIsOpen"
              @click="headerIsOpen = false"></span>

        <div class="flex flex-col w-full min-h-screen ltr:md:pl-64 rtl:md:pr-64">
            <div class="flex-grow">
                <?php echo e($slot); ?>

            </div>

            <footer rel="contentinfo" class="p-4 text-center md:px-6">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.branding.footer','data' => []]); ?>
<?php $component->withName('filament::branding.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </footer>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/components/layouts/app.blade.php ENDPATH**/ ?>