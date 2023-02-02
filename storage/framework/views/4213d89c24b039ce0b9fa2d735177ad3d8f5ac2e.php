<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions' => null,
    'ariaLabelledby' => null,
    'closeButton' => true,
    'closeEventName' => 'close-modal',
    'darkMode' => false,
    'displayClasses' => 'inline-block',
    'footer' => null,
    'header' => null,
    'heading' => null,
    'headingComponent' => 'filament-support::modal.heading',
    'hrComponent' => 'filament-support::hr',
    'id' => null,
    'openEventName' => 'open-modal',
    'slideOver' => false,
    'subheading' => null,
    'subheadingComponent' => 'filament-support::modal.subheading',
    'trigger' => null,
    'visible' => true,
    'width' => 'sm',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions' => null,
    'ariaLabelledby' => null,
    'closeButton' => true,
    'closeEventName' => 'close-modal',
    'darkMode' => false,
    'displayClasses' => 'inline-block',
    'footer' => null,
    'header' => null,
    'heading' => null,
    'headingComponent' => 'filament-support::modal.heading',
    'hrComponent' => 'filament-support::hr',
    'id' => null,
    'openEventName' => 'open-modal',
    'slideOver' => false,
    'subheading' => null,
    'subheadingComponent' => 'filament-support::modal.subheading',
    'trigger' => null,
    'visible' => true,
    'width' => 'sm',
]); ?>
<?php foreach (array_filter(([
    'actions' => null,
    'ariaLabelledby' => null,
    'closeButton' => true,
    'closeEventName' => 'close-modal',
    'darkMode' => false,
    'displayClasses' => 'inline-block',
    'footer' => null,
    'header' => null,
    'heading' => null,
    'headingComponent' => 'filament-support::modal.heading',
    'hrComponent' => 'filament-support::hr',
    'id' => null,
    'openEventName' => 'open-modal',
    'slideOver' => false,
    'subheading' => null,
    'subheadingComponent' => 'filament-support::modal.subheading',
    'trigger' => null,
    'visible' => true,
    'width' => 'sm',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    x-data="{

        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(new CustomEvent('modal-closed', { id: '<?php echo e($id); ?>' }))
        },

        open: function () {
            this.isOpen = true

            this.$refs.modalContainer.dispatchEvent(new CustomEvent('modal-opened', { id: '<?php echo e($id); ?>' }))
        },

    }"
    x-trap.noscroll="isOpen"
    <?php if($id): ?>
        x-on:<?php echo e($closeEventName); ?>.window="if ($event.detail.id === '<?php echo e($id); ?>') close()"
        x-on:<?php echo e($openEventName); ?>.window="if ($event.detail.id === '<?php echo e($id); ?>') open()"
    <?php endif; ?>
    <?php if($ariaLabelledby): ?>
        aria-labelledby="<?php echo e($ariaLabelledby); ?>"
    <?php elseif($heading): ?>
        aria-labelledby="<?php echo e("{$id}.heading"); ?>"
    <?php endif; ?>
    role="dialog"
    aria-modal="true"
    class="filament-modal <?php echo e($displayClasses); ?>"
    wire:ignore.self
>
    <?php echo e($trigger); ?>


    <div
        x-show="isOpen"
        x-transition:enter="ease duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'fixed inset-0 z-40 min-h-screen overflow-y-auto overflow-x-hidden transition',
            'flex items-center' => ! $slideOver,
        ]) ?>"
    >
        <div
            <?php if(config('filament-support.modal.is_closed_by_clicking_away', true)): ?>
                <?php if(filled($id)): ?>
                    x-on:click="$dispatch('<?php echo e($closeEventName); ?>', { id: '<?php echo e($id); ?>' })"
                <?php else: ?>
                    x-on:click="close()"
                <?php endif; ?>
            <?php endif; ?>
            aria-hidden="true"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'filament-modal-close-overlay fixed inset-0 w-full h-full bg-black/50',
                'cursor-pointer' => config('filament-support.modal.is_closed_by_clicking_away', true)
            ]) ?>"
        ></div>

        <div
            x-show="isOpen"
            <?php if(filled($id)): ?>
                x-on:keydown.window.escape="$dispatch('<?php echo e($closeEventName); ?>', { id: '<?php echo e($id); ?>' })"
            <?php else: ?>
                x-on:keydown.window.escape="close()"
            <?php endif; ?>
            x-transition:enter="ease duration-300"
            x-transition:leave="ease duration-300"
            <?php if($slideOver): ?>
                x-transition:enter-start="translate-x-full rtl:-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full rtl:-translate-x-full"
            <?php elseif($width !== 'screen'): ?>
                x-transition:enter-start="translate-y-8"
                x-transition:enter-end="translate-y-0"
                x-transition:leave-start="translate-y-0"
                x-transition:leave-end="translate-y-8"
            <?php endif; ?>
            x-ref="modalContainer"
            x-cloak
            <?php echo e($attributes->class([
                'relative w-full cursor-pointer pointer-events-none',
                'my-auto p-4' => ! $slideOver,
            ])); ?>

        >
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'filament-modal-window w-full py-2 bg-white cursor-default pointer-events-auto',
                    'dark:bg-gray-800' => $darkMode,
                    'relative' => $width !== 'screen',
                    'h-screen overflow-y-auto ml-auto mr-0 rtl:mr-auto rtl:ml-0' => $slideOver,
                    'rounded-xl mx-auto' => ! ($slideOver || ($width === 'screen')),
                    'hidden' => ! $visible,
                    'max-w-xs' => $width === 'xs',
                    'max-w-sm' => $width === 'sm',
                    'max-w-md' => $width === 'md',
                    'max-w-lg' => $width === 'lg',
                    'max-w-xl' => $width === 'xl',
                    'max-w-2xl' => $width === '2xl',
                    'max-w-3xl' => $width === '3xl',
                    'max-w-4xl' => $width === '4xl',
                    'max-w-5xl' => $width === '5xl',
                    'max-w-6xl' => $width === '6xl',
                    'max-w-7xl' => $width === '7xl',
                    'fixed inset-0' => $width === 'screen',
                ]) ?>"
            >
                <?php if($closeButton): ?>
                    <button
                        tabindex="-1"
                        type="button"
                        class="absolute top-2 right-2 rtl:right-auto rtl:left-2"
                        <?php if(filled($id)): ?>
                            x-on:click="$dispatch('<?php echo e($closeEventName); ?>', { id: '<?php echo e($id); ?>' })"
                        <?php else: ?>
                            x-on:click="close()"
                        <?php endif; ?>
                    >
                        <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'filament-modal-close-button h-4 w-4 cursor-pointer text-gray-400','title' => '__(\'filament-support::components/modal.actions.close.label\')','tabindex' => '-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>

                        <span class="sr-only">
                            <?php echo e(__('filament-support::components/modal.actions.close.label')); ?>

                        </span>
                    </button>
                <?php endif; ?>

                <div
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex flex-col h-full' => ($width === 'screen') || $slideOver,
                    ]) ?>"
                >
                    <div class="space-y-2">
                        <?php if($header): ?>
                            <div class="filament-modal-header px-6 py-2">
                                <?php echo e($header); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($header && ($actions || $heading || $slot->isNotEmpty() || $subheading)): ?>
                            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $hrComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'px-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div
                        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'filament-modal-content space-y-2 p-2',
                            'flex-1 overflow-y-auto' => ($width === 'screen') || $slideOver,
                        ]) ?>"
                    >
                        <?php if($heading || $subheading): ?>
                            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'p-4 space-y-2',
                                'text-center' => ! $slideOver,
                                'dark:text-white' => $darkMode,
                            ]) ?>">
                                <?php if($heading): ?>
                                    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $headingComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => $id . '.heading']); ?>
                                        <?php echo e($heading); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
                                <?php endif; ?>

                                <?php if($subheading): ?>
                                    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $subheadingComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e($subheading); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if($slot->isNotEmpty()): ?>
                            <div class="px-4 py-2 space-y-4">
                                <?php echo e($slot); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e($actions); ?>

                    </div>

                    <div class="space-y-2">
                        <?php if($footer && ($actions || $heading || $slot->isNotEmpty() || $subheading)): ?>
                            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $hrComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'px-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
                        <?php endif; ?>

                        <?php if($footer): ?>
                            <div class="filament-modal-footer px-6 py-2">
                                <?php echo e($footer); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\support\src\/../resources/views/components/modal/index.blade.php ENDPATH**/ ?>