<?php $__env->startSection('topbar'); ?>
    <?php echo $topbar; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('general_header'); ?>
    <?php echo $general; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $menu; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sliders'); ?>
    <?php echo $slider; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('abouts'); ?>
    <?php echo $about; ?>

<?php $__env->stopSection(); ?>

    

<?php $__env->startSection('news'); ?>
    <?php echo $news; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $footer; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index.blade.php ENDPATH**/ ?>