<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?php echo e(URL::to('tasks')); ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(URL::to('tasks/create')); ?>">Add Task<span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
     
    </div>
  </nav><?php /**PATH D:\laravel_project\dev_test\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>