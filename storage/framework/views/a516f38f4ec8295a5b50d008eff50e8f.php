
<?php $__env->startSection('home'); ?>

<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0"><?php echo e($categoryname->category_name); ?></h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="<?php echo e(asset('frontend/assets/images/blog/right-arrow.svg')); ?>" alt="right-arrow"></li>
                <li aria-current="page">Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="lonyo-section-padding9 overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
      
  <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            
<div class="lonyo-blog-wrap" data-aos="fade-up" data-aos-duration="500">
    <div class="lonyo-blog-thumb">
        <img src="<?php echo e(asset($item->image)); ?>" alt="">
    </div>
    <div class="lonyo-blog-meta">
        <ul>
        <li>
            <a href="single-blog.html"><img src="<?php echo e(asset('frontend/assets/images/blog/date.svg')); ?>" alt=""><?php echo e($item->created_at->format('M d Y')); ?></a>
        </li> 

        </ul>
    </div>
    <div class="lonyo-blog-content">
        <h2><a href="<?php echo e(url('blog/details/'.$item->post_slug)); ?>"> <?php echo e($item->post_title); ?></a></h2>
        <p><?php echo Str::limit($item->long_descp, 180, '...'); ?></p>
    </div>
    <div class="lonyo-blog-btn">
        <a href="single-blog.html" class="lonyo-default-btn blog-btn">continue reading</a>
    </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          
          <div class="lonyo-pagination center">
            <a class="pagi-btn btn2" href="single-blog.html">
              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.75 0.75L6 6L0.75 11.25" stroke="#001A3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
            <ul>
              <li><a class="current" href="#">1</a></li>
              <li><a href="single-blog.html">2</a></li>
              <li><a href="single-blog.html">3</a></li>
            </ul>
            <a class="pagi-btn" href="single-blog.html">
              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.75 0.75L6 6L0.75 11.25" stroke="#001A3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
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
    </div>
  </div>
  <!-- end blog -->
  <div class="lonyo-content-shape">
    <img src="<?php echo e(asset('frontend/assets/images/shape/shape2.svg')); ?>" alt="">
  </div>

  <?php echo $__env->make('home.homelayout.apps', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- end cta -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home_master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\basic\resources\views\home\blog\blog_category.blade.php ENDPATH**/ ?>