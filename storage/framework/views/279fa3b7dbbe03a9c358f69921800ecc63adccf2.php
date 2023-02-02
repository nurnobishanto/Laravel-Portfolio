<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
]); ?>
<?php foreach (array_filter(([
    'columns' => [
        'lg' => 2,
    ],
    'data' => [],
    'widgets' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-support::components.grid.index','data' => ['default' => $columns['default'] ?? 1,'sm' => $columns['sm'] ?? null,'md' => $columns['md'] ?? null,'lg' => $columns['lg'] ?? ($columns ? (is_array($columns) ? null : $columns) : 2),'xl' => $columns['xl'] ?? null,'twoXl' => $columns['2xl'] ?? null,'class' => 'filament-widgets-container gap-4 lg:gap-8 mb-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-support::grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['default' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['default'] ?? 1),'sm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['sm'] ?? null),'md' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['md'] ?? null),'lg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['lg'] ?? ($columns ? (is_array($columns) ? null : $columns) : 2)),'xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['xl'] ?? null),'two-xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns['2xl'] ?? null),'class' => 'filament-widgets-container gap-4 lg:gap-8 mb-6']); ?>
    <?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($widget::canView()): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount(\Livewire\Livewire::getAlias($widget), $data)->html();
} elseif ($_instance->childHasBeenRendered($widget)) {
    $componentId = $_instance->getRenderedChildComponentId($widget);
    $componentTag = $_instance->getRenderedChildComponentTagName($widget);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($widget);
} else {
    $response = \Livewire\Livewire::mount(\Livewire\Livewire::getAlias($widget), $data);
    $html = $response->html();
    $_instance->logRenderedChild($widget, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\filament\src\/../resources/views/components/widgets.blade.php ENDPATH**/ ?>