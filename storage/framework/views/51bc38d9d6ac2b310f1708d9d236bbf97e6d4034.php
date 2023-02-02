<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions',
    'alignment' => 'left',
    'fullWidth' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions',
    'alignment' => 'left',
    'fullWidth' => false,
]); ?>
<?php foreach (array_filter(([
    'actions',
    'alignment' => 'left',
    'fullWidth' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($actions instanceof \Illuminate\Contracts\View\View): ?>
    <?php echo e($actions); ?>

<?php elseif(is_array($actions)): ?>
    <?php
        $actions = array_filter(
            $actions,
            fn (\Filament\Pages\Actions\Action | \Filament\Pages\Actions\ActionGroup $action): bool => ! $action->isHidden(),
        );
    ?>

    <?php if(count($actions)): ?>
        <div
            <?php echo e($attributes->class([
                'filament-page-actions',
                'flex flex-wrap items-center gap-4' => ! $fullWidth,
                match ($alignment) {
                    'center' => 'justify-center',
                    'right' => 'flex-row-reverse space-x-reverse',
                    default => 'justify-start',
                } => ! $fullWidth,
                'grid gap-2 grid-cols-[repeat(auto-fit,minmax(0,1fr))]' => $fullWidth,
            ])); ?>

        >
            <?php echo e(\Filament\Facades\Filament::renderHook('page.actions.start')); ?>

            
            <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($action); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php echo e(\Filament\Facades\Filament::renderHook('page.actions.end')); ?>

            
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\filament\src\/../resources/views/components/pages/actions/index.blade.php ENDPATH**/ ?>