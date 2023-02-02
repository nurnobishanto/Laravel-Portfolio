<?php
    $user = \Filament\Facades\Filament::auth()->user();
    $items = \Filament\Facades\Filament::getUserMenuItems();

    $accountItem = $items['account'] ?? null;
    $accountItemUrl = $accountItem?->getUrl();

    $logoutItem = $items['logout'] ?? null;
?>

<?php echo e(\Filament\Facades\Filament::renderHook('user-menu.start')); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.index','data' => ['placement' => 'bottom-end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placement' => 'bottom-end']); ?>
     <?php $__env->slot('trigger', null, ['class' => 'ml-4 rtl:mr-4 rtl:ml-0']); ?> 
        <button class="block" aria-label="<?php echo e(__('filament::layout.buttons.user_menu.label')); ?>">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.user-avatar','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::user-avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </button>
     <?php $__env->endSlot(); ?>
    
    <?php echo e(\Filament\Facades\Filament::renderHook('user-menu.account.before')); ?>


    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.header','data' => ['color' => $accountItem?->getColor() ?? 'secondary','icon' => $accountItem?->getIcon() ?? 'heroicon-s-user-circle','href' => $accountItemUrl,'tag' => filled($accountItemUrl) ? 'a' : 'div']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accountItem?->getColor() ?? 'secondary'),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accountItem?->getIcon() ?? 'heroicon-s-user-circle'),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accountItemUrl),'tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filled($accountItemUrl) ? 'a' : 'div')]); ?>
        <?php echo e($accountItem?->getLabel() ?? \Filament\Facades\Filament::getUserName($user)); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    <?php echo e(\Filament\Facades\Filament::renderHook('user-menu.account.after')); ?>


    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.index','data' => ['xData' => '{
            mode: null,

            theme: null,

            init: function () {
                this.theme = localStorage.getItem(\'theme\') || (this.isSystemDark() ? \'dark\' : \'light\')
                this.mode = localStorage.getItem(\'theme\') ? \'manual\' : \'auto\'

                window.matchMedia(\'(prefers-color-scheme: dark)\').addEventListener(\'change\', (event) => {
                    if (this.mode === \'manual\') return

                    if (event.matches && (! document.documentElement.classList.contains(\'dark\'))) {
                        this.theme = \'dark\'

                        document.documentElement.classList.add(\'dark\')
                    } else if ((! event.matches) && document.documentElement.classList.contains(\'dark\')) {
                        this.theme = \'light\'

                        document.documentElement.classList.remove(\'dark\')
                    }
                })

                $watch(\'theme\', () => {
                    if (this.mode === \'auto\') return

                    localStorage.setItem(\'theme\', this.theme)

                    if (this.theme === \'dark\' && (! document.documentElement.classList.contains(\'dark\'))) {
                        document.documentElement.classList.add(\'dark\')
                    } else if (this.theme === \'light\' && document.documentElement.classList.contains(\'dark\')) {
                        document.documentElement.classList.remove(\'dark\')
                    }

                    $dispatch(\'dark-mode-toggled\', this.theme)
                })
            },

            isSystemDark: function () {
                return window.matchMedia(\'(prefers-color-scheme: dark)\').matches
            },
        }']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{
            mode: null,

            theme: null,

            init: function () {
                this.theme = localStorage.getItem(\'theme\') || (this.isSystemDark() ? \'dark\' : \'light\')
                this.mode = localStorage.getItem(\'theme\') ? \'manual\' : \'auto\'

                window.matchMedia(\'(prefers-color-scheme: dark)\').addEventListener(\'change\', (event) => {
                    if (this.mode === \'manual\') return

                    if (event.matches && (! document.documentElement.classList.contains(\'dark\'))) {
                        this.theme = \'dark\'

                        document.documentElement.classList.add(\'dark\')
                    } else if ((! event.matches) && document.documentElement.classList.contains(\'dark\')) {
                        this.theme = \'light\'

                        document.documentElement.classList.remove(\'dark\')
                    }
                })

                $watch(\'theme\', () => {
                    if (this.mode === \'auto\') return

                    localStorage.setItem(\'theme\', this.theme)

                    if (this.theme === \'dark\' && (! document.documentElement.classList.contains(\'dark\'))) {
                        document.documentElement.classList.add(\'dark\')
                    } else if (this.theme === \'light\' && document.documentElement.classList.contains(\'dark\')) {
                        document.documentElement.classList.remove(\'dark\')
                    }

                    $dispatch(\'dark-mode-toggled\', this.theme)
                })
            },

            isSystemDark: function () {
                return window.matchMedia(\'(prefers-color-scheme: dark)\').matches
            },
        }']); ?>
        <div>
            <?php if(config('filament.dark_mode')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.item','data' => ['icon' => 'heroicon-s-moon','xShow' => 'theme === \'dark\'','xOn:click' => 'close(); mode = \'manual\'; theme = \'light\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-s-moon','x-show' => 'theme === \'dark\'','x-on:click' => 'close(); mode = \'manual\'; theme = \'light\'']); ?>
                    <?php echo e(__('filament::layout.buttons.light_mode.label')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.item','data' => ['icon' => 'heroicon-s-sun','xShow' => 'theme === \'light\'','xOn:click' => 'close(); mode = \'manual\'; theme = \'dark\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-s-sun','x-show' => 'theme === \'light\'','x-on:click' => 'close(); mode = \'manual\'; theme = \'dark\'']); ?>
                    <?php echo e(__('filament::layout.buttons.dark_mode.label')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($key !== 'account' && $key !== 'logout'): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.item','data' => ['color' => $item->getColor() ?? 'secondary','icon' => $item->getIcon(),'href' => $item->getUrl(),'tag' => 'a']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getColor() ?? 'secondary'),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getIcon()),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->getUrl()),'tag' => 'a']); ?>
                    <?php echo e($item->getLabel()); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.item','data' => ['color' => $logoutItem?->getColor() ?? 'secondary','icon' => $logoutItem?->getIcon() ?? 'heroicon-s-logout','action' => $logoutItem?->getUrl() ?? route('filament.auth.logout'),'method' => 'post','tag' => 'form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logoutItem?->getColor() ?? 'secondary'),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logoutItem?->getIcon() ?? 'heroicon-s-logout'),'action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logoutItem?->getUrl() ?? route('filament.auth.logout')),'method' => 'post','tag' => 'form']); ?>
            <?php echo e($logoutItem?->getLabel() ?? __('filament::layout.buttons.logout.label')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php echo e(\Filament\Facades\Filament::renderHook('user-menu.end')); ?>

<?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\filament\filament\src\/../resources/views/components/layouts/app/topbar/user-menu.blade.php ENDPATH**/ ?>