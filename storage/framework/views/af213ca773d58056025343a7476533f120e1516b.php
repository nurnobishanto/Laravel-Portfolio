<?php if(file_exists(public_path($styleFile = 'vendor/artisan-gui/gui.js'))): ?>
    <script defer src="<?php echo e(asset($styleFile)); ?>"></script>
<?php else: ?>
    <script defer>
        <?php include $guiRoot . '/stubs/js/gui.js'; ?>
    </script>
<?php endif; ?><?php /**PATH E:\Laravel Pro Project\Laravel-Portfolio\vendor\3x1io\filament-commands/resources/views/partials/scripts.blade.php ENDPATH**/ ?>