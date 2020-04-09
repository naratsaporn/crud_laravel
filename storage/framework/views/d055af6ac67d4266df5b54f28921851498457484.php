
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mt-5 pt-5">Edit Task</h1>
        <hr>
        <form action="<?php echo e(url('tasks',[$task->id])); ?>" method="post">
            <input type="hidden" name="_method" value="PUT">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" value="<?php echo e($task->title); ?>" class="form-control" id="taskTitle" name="title">
            </div>
            <div class="form-group">
                <label for="description">Task Description</label>
                <input type="text" value="<?php echo e($task->description); ?>" class="form-control" id="taskDescription "name="description">
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
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_project\dev_test\resources\views/tasks/edit.blade.php ENDPATH**/ ?>