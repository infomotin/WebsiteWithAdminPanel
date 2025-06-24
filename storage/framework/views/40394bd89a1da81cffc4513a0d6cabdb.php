<?php
  $slider = App\Models\Slider::find(1);
?>

<div class="lonyo-hero-section light-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-hero-content" data-aos="fade-up" data-aos-duration="700">
            
            <h1 id="slider-title" contenteditable="<?php echo e(auth()->check() ? 'true' : 'false'); ?>" data-id="<?php echo e($slider->id); ?>"  class="hero-title"><?php echo e($slider->title); ?></h1>
            
            <p id="slider-description" contenteditable="<?php echo e(auth()->check() ? 'true' : 'false'); ?>" data-id="<?php echo e($slider->id); ?>" class="text"><?php echo e($slider->description); ?></p>
           
           
            <div class="mt-50" data-aos="fade-up" data-aos-duration="900">
              <a href="<?php echo e($slider->link); ?>" class="lonyo-default-btn hero-btn">Contact With Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-hero-thumb" data-aos="fade-left" data-aos-duration="700">
            <img src="<?php echo e(asset($slider->image )); ?>" alt="">

            <div class="lonyo-hero-shape">
              <img src="<?php echo e(asset('frontend/assets/images/shape/hero-shape1.svg')); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


   
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" >

   <script>
    document.addEventListener("DOMContentLoaded", function(){
      const titleElement = document.getElementById("slider-title");
      const descElement = document.getElementById("slider-description");

      function saveChanges(element) {
        let sliderId = element.dataset.id;
        let field = element.id === "slider-title" ? "title" : "description";
        let newValue = element.innerText.trim();

        fetch(`/edit-slider/${sliderId}`,{
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

      descElement.addEventListener("blur", function() {
        saveChanges(descElement);
      });
    });
   </script><?php /**PATH D:\laragon\www\basic\resources\views\home\homelayout\slider.blade.php ENDPATH**/ ?>