<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo e('Travisa - Visa & Immigration Website Template'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('frontend1/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend1/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('frontend1/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('frontend1/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <?php echo $__env->make('frontend.home.Spinner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <?php echo $__env->make('frontend.home.Topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Topbar End -->
    <!-- Navbar & Hero Start -->
    <?php echo $__env->make('frontend.home.Navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Navbar & Hero End -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer Start -->
    <?php echo $__env->make('frontend.home.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Footer End -->
    <!-- Copyright Start -->
    <?php echo $__env->make('frontend.home.copyright', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Copyright End -->
    <!-- Back to Top -->
    <?php echo $__env->make('frontend.home.back_to_top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('frontend1/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend1/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend1/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend1/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend1/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <!-- Template Javascript -->
    <script src="<?php echo e(asset('frontend1/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\laragon\www\basic\resources\views\frontend\master.blade.php ENDPATH**/ ?>