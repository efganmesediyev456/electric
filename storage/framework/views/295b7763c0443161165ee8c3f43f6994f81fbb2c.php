<?php $__env->startSection('topbar'); ?>
    <?php echo $topbar; ?>

<?php $__env->stopSection(); ?>

    



    



    


<?php $__env->startSection('content'); ?>


    <div class="breadcromb-wrapper">
        <div class="breadcromb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3><?php echo app('translator')->getFromJson('site.blog'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcromb-text">
        <div class="container">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Blog</li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Our Blog</li>
            </ul>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper news-wrapper">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="news-section-single">
                            <div class="news-img-main">
                                <div class="news-img"><img style="width: 350px;height: 350px;" class="img-responsive" src="<?php echo e(asset('images/'.$n->image)); ?>" alt="" data-popupalt-original-title="null" title="<?php echo e($n->title); ?>">
                                    <div class="news-list">
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo e($n->created_at->format('d-F, Y')); ?></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="news-head">
                                <h3><?php echo e($n->description); ?></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $footer; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/news/index.blade.php ENDPATH**/ ?>