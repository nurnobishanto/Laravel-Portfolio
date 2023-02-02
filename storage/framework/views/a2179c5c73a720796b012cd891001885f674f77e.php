<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'darkMode' => false,
    'placement' => null,
    'shift' => false,
    'teleport' => false,
    'trigger' => null,
    'width' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'darkMode' => false,
    'placement' => null,
    'shift' => false,
    'teleport' => false,
    'trigger' => null,
    'width' => null,
]); ?>
<?php foreach (array_filter(([
    'darkMode' => false,
    'placement' => null,
    'shift' => false,
    'teleport' => false,
    'trigger' => null,
    'width' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes->class(['filament-dropdown'])); ?>

    x-data="{
        toggle: function (event) {
            $refs.panel.toggle(event)
        },
        open: function (event) {
            $refs.panel.open(event)
        },
        close: function (event) {
            $refs.panel.close(event)
        },
    }"
>
    <div
        x-on:click="toggle"
        <?php echo e($trigger->attributes->class(['filament-dropdown-trigger cursor-pointer'])); ?>

    >
        <?php echo e($trigger); ?>

    </div>

    <div
        x-ref="panel"
        x-float<?php echo e($placement ? ".placement.{$placement}" : ''); ?>.flip.offset<?php echo e($shift ? '.shift' : ''); ?><?php echo e($teleport ? '.teleport' : ''); ?>="{ offset: 8 }"
        x-cloak
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:leave-end="opacity-0 scale-95"
        <?php if($attributes->has('wire:key')): ?>
            wire:ignore.self
            wire:key="<?php echo e($attributes->get('wire:key')); ?>.panel"
        <?php endif; ?>
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'filament-dropdown-panel absolute z-10 w-full divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-black/5 transition',
            'dark:divide-gray-700 dark:bg-gray-800 dark:ring-white/10' => $darkMode,
            match ($width) {
                'xs' => 'max-w-xs',
                'sm' => 'max-w-sm',
                'md' => 'max-w-md',
                'lg' => 'max-w-lg',
                'xl' => 'max-w-xl',
                '2xl' => 'max-w-2xl',
                '3xl' => 'max-w-3xl',
                '4xl' => 'max-w-4xl',
                '5xl' => 'max-w-5xl',
                '6xl' => 'max-w-6xl',
                '7xl' => 'max-w-7xl',
                default => 'max-w-[14rem]',
            },
        ]) ?>"
    >
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\support\src\/../resources/views/components/dropdown/index.blade.php ENDPATH**/ ?>