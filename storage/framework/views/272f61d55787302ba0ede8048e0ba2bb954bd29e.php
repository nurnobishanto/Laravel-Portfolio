<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active' => false,
    'badge' => null,
    'badgeColor' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active' => false,
    'badge' => null,
    'badgeColor' => null,
]); ?>
<?php foreach (array_filter(([
    'active' => false,
    'badge' => null,
    'badgeColor' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<span
    <?php if(config('filament.layout.sidebar.is_collapsible_on_desktop')): ?>
        x-show="$store.sidebar.isOpen"
    <?php endif; ?>
    class="<?php echo \Illuminate\Support\Arr::toCssClasses(
        array_merge(
            [
                'inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal',
                'text-white bg-white/20' => $active,
            ],
            match ($badgeColor) {
                'danger' => [
                    'text-danger-700 bg-danger-500/10' => ! $active,
                    'dark:text-danger-500' => (! $active) && config('tables.dark_mode'),
                ],
                'secondary' => [
                    'text-gray-700 bg-gray-500/10' => ! $active,
                    'dark:text-gray-500' => (! $active) && config('tables.dark_mode'),
                ],
                'success' => [
                    'text-success-700 bg-success-500/10' => ! $active,
                    'dark:text-success-500' => (! $active) && config('tables.dark_mode'),
                ],
                'warning' => [
                    'text-warning-700 bg-warning-500/10' => ! $active,
                    'dark:text-warning-500' => (! $active) && config('filament.dark_mode'),
                ],
                'primary', null => [
                    'text-primary-700 bg-primary-500/10' => ! $active,
                    'dark:text-primary-500' => (! $active) && config('tables.dark_mode'),
                ],
                default => [
                    $badgeColor => ! $active,
                ],
            },
        )
    ) ?>"
>
    <?php echo e($badge); ?>

</span>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\filament\src\/../resources/views/components/layouts/app/sidebar/badge.blade.php ENDPATH**/ ?>