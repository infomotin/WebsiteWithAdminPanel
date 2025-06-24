
<?php $__env->startSection('admin'); ?>

<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
             
        </div> 


<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">All Review</h5>
            </div><!-- end card header -->

            <div class="card-body">
    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
        <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Position</th>
            <th>Image</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->position); ?></td>
                <td> <img src="<?php echo e(asset($item->image)); ?>" style="width:70px; height:40px;"> </td>
                <td><?php echo e(Str::limit($item->message, 50, '...')); ?></td>
                <td>
    <a href="<?php echo e(route('edit.review',$item->id)); ?>" class="btn btn-success btn-sm">Edit</a>  
    <a href="<?php echo e(route('delete.review',$item->id)); ?>" class="btn btn-danger btn-sm" id="delete">Delete</a>              

                </td>
            </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

        </tbody>
    </table>
            </div>

        </div>
    </div>
</div>

        



    </div> 
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\basic\resources\views\admin\backend\review\all_review.blade.php ENDPATH**/ ?>