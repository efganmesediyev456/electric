<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Electricshop</title>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('css/elektrik/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="<?php echo e(asset('css/elektrik/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Linear icons CSS-->
    <link href="<?php echo e(asset('css/elektrik/icon-font.min.css')); ?>" rel="stylesheet">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/elektrik/slicknav.min.css')); ?>">
    <!-- Owl Carousel -->
    <link href="<?php echo e(asset('css/elektrik/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/elektrik/owl.theme.css')); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/elektrik/style.css')); ?>" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo e(asset('css/elektrik/animate.css')); ?>" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->

<?php echo $__env->yieldContent('topbar'); ?>



<?php echo $__env->yieldContent('sliders'); ?>


<?php echo $__env->yieldContent('services'); ?>


<?php echo $__env->yieldContent('abouts'); ?>
<?php echo $__env->yieldContent('team'); ?>
<?php echo $__env->yieldContent('news'); ?>


<?php $__env->startSection('content'); ?>

<?php echo $__env->yieldSection(); ?>

<?php echo $__env->yieldContent('footer'); ?>



<script src="<?php echo e(asset('js/elektrik/jquery-3.1.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/slicknav.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/jquery.animateNumber.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/slider.js')); ?>"></script>
<script src="<?php echo e(asset('js/elektrik/custom.js')); ?>"></script>
</body>

</html>




<?php /**PATH C:\xampp\htdocs\electric\resources\views/layouts/site.blade.php ENDPATH**/ ?>