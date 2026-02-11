<div>
    <?php if(\Filament\Filament::can('viewAny', $this->getModel())): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card','data' => ['class' => 'space-y-4']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'space-y-4']); ?>
            <h3 class="text-lg font-medium leading-tight">
                <?php echo e(__(static::getTitle())); ?>

            </h3>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(static::getComponent('list'), [
                'canAttach' => $this->canAttach(),
                'canCreate' => $this->canCreate(),
                'canDelete' => $this->canDelete(),
                'canDetach' => $this->canDetach(),
                'manager' => static::class,
                'model' => $this->getModel(),
                'owner' => $this->getOwner(),
            ])->html();
} elseif ($_instance->childHasBeenRendered('GChi7ma')) {
    $componentId = $_instance->getRenderedChildComponentId('GChi7ma');
    $componentTag = $_instance->getRenderedChildComponentTagName('GChi7ma');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GChi7ma');
} else {
    $response = \Livewire\Livewire::mount(static::getComponent('list'), [
                'canAttach' => $this->canAttach(),
                'canCreate' => $this->canCreate(),
                'canDelete' => $this->canDelete(),
                'canDetach' => $this->canDetach(),
                'manager' => static::class,
                'model' => $this->getModel(),
                'owner' => $this->getOwner(),
            ]);
    $html = $response->html();
    $_instance->logRenderedChild('GChi7ma', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <?php if($this->canCreate()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.modal','data' => ['class' => 'w-full max-w-4xl','name' => static::class . 'RelationManagerCreateModal']]); ?>
<?php $component->withName('filament::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full max-w-4xl','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::class . 'RelationManagerCreateModal')]); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card','data' => ['class' => 'space-y-5']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'space-y-5']); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card-header','data' => ['title' => static::$createModalHeading]]); ?>
<?php $component->withName('filament::card-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::$createModalHeading)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(static::getComponent('create'), [
                        'manager' => static::class,
                        'model' => $this->getModel(),
                        'owner' => $this->getOwner(),
                    ])->html();
} elseif ($_instance->childHasBeenRendered('8hC0z6E')) {
    $componentId = $_instance->getRenderedChildComponentId('8hC0z6E');
    $componentTag = $_instance->getRenderedChildComponentTagName('8hC0z6E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8hC0z6E');
} else {
    $response = \Livewire\Livewire::mount(static::getComponent('create'), [
                        'manager' => static::class,
                        'model' => $this->getModel(),
                        'owner' => $this->getOwner(),
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('8hC0z6E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($this->canEdit()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.modal','data' => ['class' => 'w-full max-w-4xl','name' => static::class . 'RelationManagerEditModal']]); ?>
<?php $component->withName('filament::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full max-w-4xl','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::class . 'RelationManagerEditModal')]); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card','data' => ['class' => 'space-y-5']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'space-y-5']); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card-header','data' => ['title' => static::$editModalHeading]]); ?>
<?php $component->withName('filament::card-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::$editModalHeading)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(static::getComponent('edit'), [
                        'manager' => static::class,
                        'model' => $this->getModel(),
                        'owner' => $this->getOwner(),
                    ])->html();
} elseif ($_instance->childHasBeenRendered('ELm8uV6')) {
    $componentId = $_instance->getRenderedChildComponentId('ELm8uV6');
    $componentTag = $_instance->getRenderedChildComponentTagName('ELm8uV6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ELm8uV6');
} else {
    $response = \Livewire\Livewire::mount(static::getComponent('edit'), [
                        'manager' => static::class,
                        'model' => $this->getModel(),
                        'owner' => $this->getOwner(),
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('ELm8uV6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($this->canAttach()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.modal','data' => ['class' => 'w-full max-w-lg','name' => static::class . 'RelationManagerAttachModal']]); ?>
<?php $component->withName('filament::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full max-w-lg','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::class . 'RelationManagerAttachModal')]); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card','data' => ['class' => 'w-full space-y-5']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full space-y-5']); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card-header','data' => ['title' => static::$attachModalHeading]]); ?>
<?php $component->withName('filament::card-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::$attachModalHeading)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(static::getComponent('attach'), [
                        'manager' => static::class,
                        'owner' => $this->getOwner(),
                    ])->html();
} elseif ($_instance->childHasBeenRendered('MAamDoU')) {
    $componentId = $_instance->getRenderedChildComponentId('MAamDoU');
    $componentTag = $_instance->getRenderedChildComponentTagName('MAamDoU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MAamDoU');
} else {
    $response = \Livewire\Livewire::mount(static::getComponent('attach'), [
                        'manager' => static::class,
                        'owner' => $this->getOwner(),
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('MAamDoU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/relation-manager.blade.php ENDPATH**/ ?>