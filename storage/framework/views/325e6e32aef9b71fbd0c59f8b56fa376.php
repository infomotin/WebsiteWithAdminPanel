<div class="lonyo-section-padding position-relative overflow-hidden">
    <div class="container">
      <div class="lonyo-section-title">
        <div class="row">
        <?php
          $title = App\Models\Title::find(1);
        ?>
          <div class="col-xl-8 col-lg-8">
            <h2 id="review-title" contenteditable="<?php echo e(auth()->check() ? 'true' : 'false'); ?>" data-id="<?php echo e($title->id); ?>"><?php echo e($title->reviews); ?></h2>
          </div>

          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="lonyo-title-btn">
              <a class="lonyo-default-btn t-btn" href="contact-us.html">Read Customer Stories</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lonyo-testimonial-slider-init">

    <?php
      $review = App\Models\Review::latest()->get();
    ?>
      
      <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <div class="lonyo-t-wrap wrap2 light-bg">
        <div class="lonyo-t-ratting">
          <img src="<?php echo e(asset('frontend/assets/images/shape/star.svg')); ?>" alt="">
        </div>
        <div class="lonyo-t-text">
          <p><?php echo e($item->message); ?></p>
        </div>
        <div class="lonyo-t-author">
          <div class="lonyo-t-author-thumb">
            <img src="<?php echo e(asset($item->image)); ?>" alt="">
          </div>
          <div class="lonyo-t-author-data">
            <p><?php echo e($item->name); ?></p>
            <span><?php echo e($item->position); ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
    
    </div>
    <div class="lonyo-t-overlay2">
      <img src="<?php echo e(asset('frontend/assets/images/v2/overlay.png')); ?>" alt="">
    </div>
  </div>


  
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" >

  <script>
   document.addEventListener("DOMContentLoaded", function(){
     const titleElement = document.getElementById("review-title"); 

     function saveChanges(element) {
       let reviewId = element.dataset.id;
       let field = element.id === "review-title" ? "reviews" : "";
       let newValue = element.innerText.trim();

       fetch(`/edit-reviews/${reviewId}`,{
         method: "POST",
         headers: {
           "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),"Content-Type": "application/json"
         },
         body: JSON.stringify({ [field]:newValue })
       })
       .then(response => response.json())
       .then(data => {
         if(data.success) {
           console.log(`${field} updated successfully`);
         }
       })
       .catch(error => console.error("Error:", error)); 
     }

     // Auto save on Enter Key
     document.addEventListener("keydown", function(e){
       if (e.key === "Enter") {
         e.preventDefault();
         saveChanges(e.target);
       }
     });

     // Auto save on losing foucs
     titleElement.addEventListener("blur", function () {
       saveChanges(titleElement);
     });
 
   });
  </script><?php /**PATH D:\laragon\www\basic\resources\views\home\homelayout\review.blade.php ENDPATH**/ ?>