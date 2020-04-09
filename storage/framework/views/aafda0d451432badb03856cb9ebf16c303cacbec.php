
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mt-5 pt-5">Add new Task</h1>
    <hr>
    <form action="/tasks" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="title">
        </div>
        <div>
            <label for="title">Task Description</label>
            <input type="text" class="form-control" id="taskTitleDescription" name="description">

        </div>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_project\dev_test\resources\views/tasks/create.blade.php ENDPATH**/ ?>