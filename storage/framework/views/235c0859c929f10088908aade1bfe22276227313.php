 
 <?php $__env->startSection('content'); ?>
 
 <div class="container">

 <?php if($errors->any()): ?>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="alert alert-danger" role="alert">
  <?php echo e($error); ?>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php endif; ?>


<h1> Create page </h1> 

<!-- Default form register -->
<form class="text-center border border-light p-5" action="<?php echo e(route('store')); ?>" method="POST">

  <?php echo e(csrf_field()); ?>


    <p class="h4 mb-4">Add Student </p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

    

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
     

    <!-- Newsletter -->
 

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

    <!-- Social register -->
     

     

</form>
<!-- Default form register -->

 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel 6 CRUD\lcrud\lblog\resources\views/create.blade.php ENDPATH**/ ?>