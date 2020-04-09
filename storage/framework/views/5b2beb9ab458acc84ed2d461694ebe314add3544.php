<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
       
        <?php echo $__env->make('layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        <?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH D:\laravel_project\dev_test\resources\views/layouts/mainlayout.blade.php ENDPATH**/ ?>