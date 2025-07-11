<div class="lonyo-section-padding4">
    <div class="container">
      
      <?php
          $title = App\Models\Title::find(1);
        ?>

      <div class="lonyo-section-title center">
         <h2 id="answer-title" contenteditable="<?php echo e(auth()->check() ? 'true' : 'false'); ?>" data-id="<?php echo e($title->id); ?>"><?php echo e($title->answers); ?></h2>
      </div>
      
      <?php
        $faqs = App\Models\Faq::latest()->limit(5)->get();
      ?>
      
      <div class="lonyo-faq-shape"></div>
      <div class="lonyo-faq-wrap1">
        
      <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="lonyo-faq-item item2" data-aos="fade-up" data-aos-duration="500">
          <div class="lonyo-faq-header">
            <h4><?php echo e($faq->title); ?></h4>
            <div class="lonyo-active-icon">
              <img class="plasicon" src="<?php echo e(asset('frontend/assets/images/v1/mynus.svg')); ?>" alt="">
              <img class="mynusicon" src="<?php echo e(asset('frontend/assets/images/v1/plas.svg')); ?>" alt="">
            </div>
          </div>
          <div class="lonyo-faq-body body2">
            <p><?php echo e($faq->description); ?></p>
          </div>
        </div> 
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
      </div>
      <div class="faq-btn" data-aos="fade-up" data-aos-duration="700">
        <a class="lonyo-default-btn faq-btn2" href="faq.html">Can't find your answer</a>
      </div>
    </div>
  </div>

  
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" >

  <script>
   document.addEventListener("DOMContentLoaded", function(){
     const titleElement = document.getElementById("answer-title"); 

     function saveChanges(element) {
       let answerId = element.dataset.id;
       let field = element.id === "answer-title" ? "answers" : "";
       let newValue = element.innerText.trim();

       fetch(`/edit-answers/${answerId}`,{
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
  </script><?php /**PATH D:\laragon\www\basic\resources\views\home\homelayout\answers.blade.php ENDPATH**/ ?>