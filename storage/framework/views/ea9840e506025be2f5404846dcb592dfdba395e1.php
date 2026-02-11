<div>
    <form
        wire:submit.prevent="attach"
        class="space-y-6"
    >
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.form','data' => ['schema' => $this->getForm()->getSchema(),'columns' => $this->getForm()->getColumns()]]); ?>
<?php $component->withName('forms::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['schema' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getForm()->getSchema()),'columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getForm()->getColumns())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.resources.forms.actions','data' => ['actions' => $this->getActions()]]); ?>
<?php $component->withName('filament::resources.forms.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getActions())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </form>
</div>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/resources/views/resources/relation-manager/attach-record.blade.php ENDPATH**/ ?>