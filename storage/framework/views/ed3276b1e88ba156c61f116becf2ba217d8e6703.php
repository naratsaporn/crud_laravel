<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Page</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
       
 
    </head>
    <body>
       <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH D:\laravel_project\dev_test\resources\views/layouts/master.blade.php ENDPATH**/ ?>