
<?php $__env->startSection('home'); ?>
 

<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">Our Team</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="<?php echo e(asset('frontend/assets/images/blog/right-arrow.svg')); ?>" alt="right-arrow"></li>
                <li aria-current="page">Our Team</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

  <section class="lonyo-section-padding9">
    <div class="container">
      <div class="lonyo-section-title max-w616">
        <h2>Meet our brilliant team members</h2>
      </div>

    <?php
    $team = App\Models\Team::latest()->get();
     ?>


      <div class="row">
       
       <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="col-lg-3 col-md-6">
          <div class="lonyo-team-wrap" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-team-thumb">
              <a href="single-team.html"><img src="<?php echo e(asset($item->image )); ?>" alt=""></a>
            </div>
            <div class="lonyo-team-content2">
              <a href="single-team.html">
                <h6><?php echo e($item->name); ?></h6>
              </a>
              <p><?php echo e($item->position); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


         
      </div>
      <div class="mt-50 team-btn" data-aos="fade-up" data-aos-duration="700">
        <a href="contact-us.html" class="lonyo-default-btn team-btn2">Would you joint of our group?</a>
      </div>
    </div>
  </section>
  <!-- end content -->

  <div class="lonyo-content-shape">
    <img src="<?php echo e(asset('frontend/assets/images/shape/shape2.svg')); ?>" alt="">
  </div>


  <?php echo $__env->make('home.homelayout.apps', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end cta -->






<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home_master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\basic\resources\views\home\team\team_page.blade.php ENDPATH**/ ?>