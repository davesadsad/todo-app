<?php $__env->startSection('content'); ?>
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
<div class="text-center" style="width: 40%">
<h1 class="display-5 text-black font-weight-bold">Want to change what needs to be done? </h1>
<H1 class="display-6 text-white font-weight-bold"> <?php echo e($todo->title); ?> </H1>
<form action="<?php echo e(route('todo.update' , $todo->id)); ?>" method="POST" >
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<div class="input-group nb-3 w-100">
<input type="text" class="form-control form-control-lg" name="title" value="<?php echo e($todo->title); ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
<div class="input-group-append">
<button class="btn btn-success" type="submit" id="button-addon2" style="background-color: #749c75;"> Save</button>
</div>
</div>
</form>


</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\todolist\resources\views/todo/edit.blade.php ENDPATH**/ ?>