<div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    'py-3 px-6 mt-auto -mb-6 text-xs border-t filament-versions-nav-component',
    'dark:border-gray-700' => config('filament.dark_mode'),
]) ?>"
    x-data
    x-show="$store.sidebar.isOpen">
    <ul class="flex flex-wrap items-center gap-x-4 gap-y-2">
        <li class="flex-shrink-0">Laravel v<?php echo e($versions['laravel']); ?></li>
        <li class="flex-shrink-0">PHP v<?php echo e($versions['php']); ?></li>
        <li class="flex-shrink-0">Filament <?php echo e($versions['filament']); ?></li>
        <?php if(FilamentVersions\Facades\FilamentVersions::getItems()): ?>
            <?php $__currentLoopData = FilamentVersions\Facades\FilamentVersions::getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="flex-shrink-0"><?php echo e($item['name']); ?> <?php echo e($item['version']); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\awcodes\filament-versions\src\/../resources/views/filament-versions.blade.php ENDPATH**/ ?>