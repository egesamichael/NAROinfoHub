<?php $attributes = $attributes->exceptProps([
    'closeButton' => false,
    'name' => null,
]); ?>
<?php foreach (array_filter(([
    'closeButton' => false,
    'name' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<span
    <?php echo e($attributes->except('class')); ?>

    x-data="{ open: false }"
    x-init="
        $watch('open', value => {
            if (value === true) {
                document.body.classList.add('overflow-hidden')
            } else {
                document.body.classList.remove('overflow-hidden')
            }
        });
    "
    x-on:keydown.escape.window="open = false"
    x-on:open.window="if ('<?php echo e($name); ?>' && $event.detail === '<?php echo e((string) Str::of($name)->replace('\\', '\\\\')); ?>') open = true"
    x-on:close.window="if ('<?php echo e($name); ?>' && $event.detail === '<?php echo e((string) Str::of($name)->replace('\\', '\\\\')); ?>') open = false"
    x-cloak
>
    <?php echo e($trigger ?? null); ?>


    <div
        x-show="open"
        x-bind:aria-hidden="! open"
        class="fixed inset-0 z-40 overflow-y-auto"
    >
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center cursor-default sm:block sm:p-0">
            <div
                x-show="open"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                aria-hidden="true"
                class="fixed inset-0 transition-opacity"
            >
                <div class="absolute inset-0 bg-gray-800 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

            <div
                x-show="open"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                role="dialog"
                aria-modal="true"
                x-on:click.away="open = false"
                <?php echo e($attributes->only('class')->merge(['class' => 'inline-block text-left align-bottom transition-all transform sm:my-8 sm:align-middle'])); ?>

            >
                <div
                    class="flex flex-col space-y-4"
                >
                    <?php if($closeButton): ?>
                        <button
                            type="button"
                            x-on:click="open = false"
                            class="flex self-center flex-shrink-0 text-gray-200 transition-colors duration-200 hover:text-white"
                        >
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
                    <?php endif; ?>

                    <div class="flex-grow">
                        <?php echo e($slot); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</span>
<?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\vendor\filament\filament\src/../resources/views/components/modal.blade.php ENDPATH**/ ?>