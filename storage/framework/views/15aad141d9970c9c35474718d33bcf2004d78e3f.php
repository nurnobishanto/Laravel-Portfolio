<div class="relative">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filament-clear-cache::clear-cache-button')->html();
} elseif ($_instance->childHasBeenRendered('l2965997217-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2965997217-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2965997217-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2965997217-0');
} else {
    $response = \Livewire\Livewire::mount('filament-clear-cache::clear-cache-button');
    $html = $response->html();
    $_instance->logRenderedChild('l2965997217-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div><?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\cms-multi\filament-clear-cache\src\/../resources/views/widgets/toolbar-menu.blade.php ENDPATH**/ ?>