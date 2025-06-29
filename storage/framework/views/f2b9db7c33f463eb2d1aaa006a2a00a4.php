<?php 
  $usability = App\Models\Usability::find(1);
?>
<div class="lonyo-section-padding bg-heading position-relative sectionn">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="lonyo-video-thumb">
            <img src="<?php echo e(asset($usability->image )); ?>" alt="">
            <a class="play-btn video-init" href="<?php echo e($usability->youtube); ?>">
              <img src="<?php echo e(asset('frontend/assets/images/v1/play-icon.svg')); ?>" alt="">
              <div class="waves wave-1"></div>
              <div class="waves wave-2"></div>
              <div class="waves wave-3"></div>
            </a>
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content lonyo-video-section pl-50" data-aos="fade-up" data-aos-duration="500">
            <h2><?php echo e($usability->title); ?></h2>
            <p><?php echo e($usability->description); ?></p>
            <div class="mt-50" data-aos="fade-up" data-aos-duration="700">
              <a class="lonyo-default-btn video-btn" href="<?php echo e($usability->link); ?>">Download the app</a>
            </div>
          </div>
        </div>
      </div>

      <?php
        $connects = App\Models\Connect::whereIn('id',[1,2,3])->get()->keyBy('id');
      ?>
      <div class="row">
        
        <?php $__currentLoopData = $connects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $connect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <div class="col-xl-4 col-md-6">
          <div class="lonyo-process-wrap" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-process-number">
              <img src="<?php echo e(asset('frontend/assets/images/v1/n'.$connect->id. '.svg')); ?>" alt="">
            </div>
            <div class="lonyo-process-title">
              <h4 class="editable-title" contenteditable="<?php echo e(auth()->check() ? 'true' : 'false'); ?>" data-id="<?php echo e($connect->id); ?>"><?php echo e($connect->title); ?></h4>
            </div>
            <div class="lonyo-process-data">
              <p class="editable-description" contenteditable="<?php echo e(auth()->check() ? 'true' : 'false'); ?>" data-id="<?php echo e($connect->id); ?>"><?php echo e($connect->description); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
         
        <div class="border-bottom" data-aos="fade-up" data-aos-duration="500"></div>
      </div>
    </div>
  </div>


   
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" >

   <script>
    document.addEventListener("DOMContentLoaded", function(){
      
      function saveChanges(element) {
        let connectId = element.dataset.id;
        let field = element.classList.contains("editable-title") ? "title" : "description";
        let newValue = element.innerText.trim();

        fetch(`/update-connect/${connectId}`,{
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
      document.querySelectorAll(".editable-title, .editable-description").forEach(el => {
        el.addEventListener("blur", function() {
          saveChanges(el);
        });
      });
    
    });
   </script><?php /**PATH D:\laragon\www\basic\resources\views\home\homelayout\usability.blade.php ENDPATH**/ ?>