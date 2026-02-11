<?php $attributes = $attributes->exceptProps([
    'id' => Str::uuid(),
    'asButton' => false,
]); ?>
<?php foreach (array_filter(([
    'id' => Str::uuid(),
    'asButton' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    class="relative"
    x-data="{ open: false, popper: null }"
    x-cloak
    x-init="popper = createPopper($refs.btn, $refs.menu, { 
        modifiers: [
            flip, 
            preventOverflow,
        ]
    })"
    @click.away="open = false"
    wire:ignore
>
    <?php if($asButton): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.button','data' => ['xRef' => 'btn','xOn:click' => 'open = !open; $nextTick(() => popper.update())','ariaHaspopup' => 'true','ariaControls' => $id,'xBind:ariaExpanded' => 'open','attributes' => $attributes]]); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['x-ref' => 'btn','x-on:click' => 'open = !open; $nextTick(() => popper.update())','aria-haspopup' => 'true','aria-controls' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'x-bind:aria-expanded' => 'open','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
            <?php echo e($button); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php else: ?> 
        <button
            type="button"
            aria-haspopup="true"
            aria-controls="<?php echo e($id); ?>"
            x-ref="btn"
            @click="open = !open; $nextTick(() => popper.update())"
            :aria-expanded="open"
            <?php echo e($attributes); ?>

        >
            <?php echo e($button); ?>

        </button>
    <?php endif; ?>

    <div
        x-show="open"
        x-ref="menu"
        role="menu"
        id="<?php echo e($id); ?>"
        tabindex="-1"
        class="absolute z-50 bg-gray-700 text-white shadow-md rounded overflow-hidden p-1.5"
    >
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/components/dropdown.blade.php ENDPATH**/ ?>