
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Edit Faqs </h4>
            </div>
        </div> 


        <div class="row">
            <div class="col-12">
                <div class="card">

<div class="card-body"> 

<div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
    <div class="row">

        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="card border mb-0">

<div class="card-header">
    <div class="row align-items-center">
        <div class="col">                      
            <h4 class="card-title mb-0">Edit Faqs</h4>                      
        </div><!--end col-->                                                       
    </div>
</div>

 <form action="<?php echo e(route('update.faqs')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id"value="<?php echo e($faqs->id); ?>">

<div class="card-body">
    
    <div class="form-group mb-3 row">
        <label class="form-label"> Title</label>
        <div class="col-lg-12 col-xl-12">
            <input class="form-control" type="text" name="title" value="<?php echo e($faqs->title); ?>" >
        </div>
    </div> 

    <div class="form-group mb-3 row">
        <label class="form-label">Description</label>
        <div class="col-lg-12 col-xl-12">
            <textarea name="description" class="form-control"><?php echo e($faqs->description); ?></textarea>
        </div>
    </div> 
  
    <button type="submit" class="btn btn-primary">Save Changes</button>

</div><!--end card-body-->
</form> 


                </div>
            </div>
 

        </div>
    </div>
</div> <!-- end education -->

  
</div>
</div>
</div>
</div>
 


    </div> 
</div> 


 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\basic\resources\views\admin\backend\faqs\edit_faqs.blade.php ENDPATH**/ ?>