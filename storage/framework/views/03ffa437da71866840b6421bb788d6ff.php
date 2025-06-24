
<?php $__env->startSection('home'); ?>

<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0"><?php echo e($blog->post_title); ?></h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="<?php echo e(asset('frontend/assets/images/blog/right-arrow.svg')); ?>" alt="right-arrow"></li>
                <li aria-current="page">Details Page</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="lonyo-section-padding7 overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="lonyo-blog-d-wrap">
            <div class="lonyo-blog-d-thumb" data-aos="fade-up" data-aos-duration="700">
              <img src="<?php echo e(asset($blog->image)); ?>" alt="">
            </div>
            <div class="lonyo-blog-meta pb-0">
              <ul>
                <li>
                  <a href="single-blog.html"><img src="<?php echo e(asset('frontend/assets/images/blog/date.svg')); ?>" alt=""><?php echo e($blog->created_at->format('M d Y')); ?></a>
                </li>
                
              </ul>
            </div>
            <div class="lonyo-blog-d-content">
              <h2><a href="single-blog.html"><?php echo e($blog->post_title); ?></a></h2>
              <p> <?php echo $blog->long_descp; ?></p>
            </div>
             
            
          </div>
        </div>
        <div class="col-lg-4">
          <div class="lonyo-blog-sidebar" data-aos="fade-left" data-aos-duration="700">
            <div class="lonyo-blog-widgets">
              <form action="#">
                <div class="lonyo-search-box">
                  <input type="search" placeholder="Type keyword here">
                  <button id="lonyo-search-btn" type="button"><i class="ri-search-line"></i></button>
                </div>
              </form>
            </div>
            <div class="lonyo-blog-widgets">
              <h4>Categories:</h4>
              <div class="lonyo-blog-categorie">
                <ul>
                    <?php $__currentLoopData = $blogcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li><a href="<?php echo e(url('blog/category/'.$blog->id)); ?>"><?php echo e($blog->category_name); ?> <span>(<?php echo e($blog->posts_count); ?>)</span></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            </div>
            <div class="lonyo-blog-widgets">
              <h4>Recent Posts</h4>
              <?php $__currentLoopData = $recentpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <a class="lonyo-blog-recent-post-item" href="single-blog.html">
              <div class="lonyo-blog-recent-post-thumb">
                  <img src="<?php echo e(asset($recent->image)); ?>" alt="" style="width: 100px; height:100px;">
              </div>
              <div class="lonyo-blog-recent-post-data">
                  <ul>
                  <li><img src="<?php echo e(asset('frontend/assets/images/blog/date.svg')); ?>" alt=""><?php echo e($recent->created_at->format('M d Y')); ?></li>
                  </ul>
                  <div>
                  <h4><?php echo e($recent->post_title); ?></h4>
                  </div>
              </div>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
            
          </div>
        </div>
      </div>
      <div class="deivdead-line"></div>
      
       
    </div>
  </div>
  <!-- end blog -->


  <div class="lonyo-content-shape">
    <img src="<?php echo e(asset('frontend/assets/images/shape/shape2.svg')); ?>" alt="">
  </div>

  <?php echo $__env->make('home.homelayout.apps', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home_master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\basic\resources\views\home\blog\blog_details.blade.php ENDPATH**/ ?>