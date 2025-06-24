<header class="site-header lonyo-header-section light-bg" id="sticky-menu">
    <div class="container">
      <div class="row gx-3 align-items-center justify-content-between">
        <div class="col-8 col-sm-auto ">
          <div class="header-logo1 ">
            <a href="<?php echo e(url('/')); ?>">
              <img src="<?php echo e(asset('frontend/assets/images/logo/logo-dark.svg')); ?>" alt="logo">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="lonyo-main-menu-item">
            <nav class="main-menu menu-style1 d-none d-lg-block menu-left">
              <ul>

                <li>
                  <a href="<?php echo e(url('/')); ?>">Home</a>
                </li> 
                <li class="menu-item-has-children">
                  <a href="<?php echo e(route('about.us')); ?>">About Us</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="index.html">
                       Company Profile
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo e(route('our.team')); ?>">
                        Team
                      </a>
                    </li> 
                  </ul>
                </li>

                <li>
                  <a href="contact-us.html">Our Service</a>
                </li>
                <li>
                  <a href="contact-us.html">Portfolio</a>
                </li>
                <li>
                  <a href="<?php echo e(route('blog.page')); ?>">Blog</a>
                </li>  
                 
                <li>
                  <a href="<?php echo e(route('contact.us')); ?>">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
            
    <?php if(auth()->guard()->check()): ?>
    <div class="lonyo-header-info-content">
      <ul>
        <li><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
      </ul>
    </div> 
    <?php else: ?>
    <div class="lonyo-header-info-content">
      <ul>
        <li><a href="<?php echo e(route('login')); ?>">Log in</a></li>
      </ul>
    </div> 
    <?php endif; ?>        
            


            <a class="lonyo-default-btn lonyo-header-btn" href="conact-us.html">Book a demo</a>
          </div>
          <div class="lonyo-header-menu">
            <nav class="navbar site-navbar justify-content-between">
              <!-- Brand Logo-->
              <!-- mobile menu trigger -->
              <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                <span></span>
              </button>
              <!--/.Mobile Menu Hamburger Ends-->
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>
<?php /**PATH D:\laragon\www\basic\resources\views\home\body\header.blade.php ENDPATH**/ ?>