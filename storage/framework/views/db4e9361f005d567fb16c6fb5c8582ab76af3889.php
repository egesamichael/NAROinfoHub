<input
    type="hidden"
    <?php echo $formComponent->getId() ? "id=\"{$formComponent->getId()}\"" : null; ?>

    <?php echo $formComponent->getName() ? "{$formComponent->getBindingAttribute()}=\"{$formComponent->getName()}\"" : null; ?>

    <?php echo $formComponent->isRequired() ? 'required' : null; ?>

    <?php echo Filament\format_attributes($formComponent->getExtraAttributes()); ?>

/>
<?php /**PATH /var/www/projects/NAROinfoHub/vendor/filament/filament/packages/forms/resources/views/components/hidden.blade.php ENDPATH**/ ?>