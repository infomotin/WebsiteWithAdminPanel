
<?php $__env->startSection('home'); ?>

    <?php echo $__env->make('home.homelayout.slider', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end hero -->
    <?php echo $__env->make('home.homelayout.features', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end content -->

    <?php echo $__env->make('home.homelayout.clarifies', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end content -->

    <?php echo $__env->make('home.homelayout.get_all', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <div class="lonyo-content-shape3">
    <img src="<?php echo e(asset('frontend/assets/images/shape/shape2.svg')); ?>" alt="">
  </div>
  <!-- end content -->

   <?php echo $__env->make('home.homelayout.usability', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


  <div class="lonyo-content-shape1">
    <img src="<?php echo e(asset('frontend/assets/images/shape/shape3.svg')); ?>" alt="">
  </div>
  <!-- end video -->

    <?php echo $__env->make('home.homelayout.review', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end testimonial -->

    <?php echo $__env->make('home.homelayout.answers', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <div class="lonyo-content-shape3">
    <img src="<?php echo e(asset('frontend/assets/images/shape/shape2.svg')); ?>" alt="">
  </div>
  <!-- end faq --> 
  <?php echo $__env->make('home.homelayout.apps', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end cta --> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home_master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\basic\resources\views\home\index.blade.php ENDPATH**/ ?>