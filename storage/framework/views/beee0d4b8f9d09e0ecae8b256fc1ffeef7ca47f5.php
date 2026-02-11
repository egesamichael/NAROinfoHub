<?php $attributes = $attributes->exceptProps([
    'breadcrumbs' => [],
    'title',
]); ?>
<?php foreach (array_filter(([
    'breadcrumbs' => [],
    'title',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<header class="flex items-center justify-between max-w-screen-xl mx-auto p-4 space-x-4 rtl:space-x-reverse md:py-6 md:px-8">
    <div class="flex items-center">
        <button
            type="button"
            aria-controls="banner"
            @click.prevent="headerIsOpen = true"
            :aria-expanded="headerIsOpen"
            class="ltr:mr-4 rtl:ml-4 text-gray-500 transition-colors duration-200 md:hidden hover:text-gray-700"
        >
            <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-menu-alt-2'); ?>
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

        <div class="space-y-1">
            <?php if(count($breadcrumbs)): ?>
                <p class="-mt-2 font-mono text-sm text-gray-500">
                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($url); ?>" class="hover:underline"><?php echo e(__($label)); ?></a>

                        <span>/</span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
            <?php endif; ?>

            <h1 class="text-2xl font-medium leading-tight md:text-3xl"><?php echo e(__($title)); ?></h1>
        </div>
    </div>

    <?php echo e($actions ?? null); ?>

</header>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/components/app-header.blade.php ENDPATH**/ ?>