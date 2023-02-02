<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'notification',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'notification',
]); ?>
<?php foreach (array_filter(([
    'notification',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes->class(['filament-notifications-notification pointer-events-auto invisible'])); ?>

    x-data="notificationComponent({ notification: <?php echo \Illuminate\Support\Js::from($notification)->toHtml() ?> })"
    wire:key="<?php echo e($this->id); ?>.notifications.<?php echo e($notification->getId()); ?>"
    dusk="filament.notifications.notification"
>
    <?php echo e($slot); ?>

</div>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\notifications\src\/../resources/views/components/notification.blade.php ENDPATH**/ ?>