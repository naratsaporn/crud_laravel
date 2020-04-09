

<?php $__env->startSection('content'); ?>

    <div class="container">
       <h1 class="mt-5 pt-5">Showing Task [ <?php echo e($task->title); ?> ] </h1> 
       <div class="jumbotron text-center">
           <p>
               <strong>Task Title: </strong><?php echo e($task->title); ?> <br>
               <strong>Task Description: </strong><?php echo e($task->description); ?> <br>
           </p>
       </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_project\dev_test\resources\views/tasks/show.blade.php ENDPATH**/ ?>