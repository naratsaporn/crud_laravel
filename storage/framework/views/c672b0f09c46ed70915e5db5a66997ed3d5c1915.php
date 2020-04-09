
<?php $__env->startSection('content'); ?>
    <?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
    <table class="table"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task Title</th>
                <th scope="col">Task Descripion</th>
                <th scope="col">Created At</th>
                <th scope="col">Action></th>
            </tr>
        </thead>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="col"><?php echo e($task->id); ?></th>
                <td><a href="/tasks/<?php echo e($task->id); ?>"><?php echo e($task->title); ?></a> </td>
                <td><?php echo e($task->created_at->toFormattedDateString()); ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo e(URL::to('tasks/'.$task->id.'/edit')); ?>">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                    </div>
                    <form action="<?php echo e(url('tasks',[$task->id])); ?>" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" class="btn btn-danger" value="Delate">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_project\dev_test\resources\views/tasks/index.blade.php ENDPATH**/ ?>