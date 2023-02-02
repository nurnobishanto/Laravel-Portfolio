<p
    data-validation-error
    <?php echo e($attributes->class([
        'filament-forms-field-wrapper-error-message text-sm text-danger-600',
        'dark:text-danger-400' => config('forms.dark_mode'),
    ])); ?>

>
    <?php echo e($slot); ?>

</p>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\forms\src\/../resources/views/components/field-wrapper/error-message.blade.php ENDPATH**/ ?>