<?php $__env->startSection('body_class','nav-md'); ?>
<?php echo $__env->make('admin.layouts.flash-messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('page'); ?>
    <div class="container body">
        <div class="main_container">
            <?php $__env->startSection('header'); ?>
                <?php echo $__env->make('admin.sections.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldSection(); ?>

            <?php echo $__env->yieldContent('left-sidebar'); ?>

            <div class="right_col" role="main">
                <div class="page-title">
                    <div class="title_left">
                        <h1 class="h3"><?php echo $__env->yieldContent('title'); ?></h1>
                    </div>
                    <?php if(Breadcrumbs::exists()): ?>
                        <div class="title_right">
                            <div class="pull-right">
                                <?php echo Breadcrumbs::render(); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <footer>
                <?php echo $__env->make('admin.sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <?php echo e(Html::style(mix('assets/admin/css/admin.css'))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo e(Html::script(mix('assets/admin/js/admin.js'))); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>