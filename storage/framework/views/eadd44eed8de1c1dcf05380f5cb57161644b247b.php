<?php $__env->startSection('topbar'); ?>
    <?php echo $topbar; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('general_header'); ?>
    <?php echo $general; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $menu; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="inner-intro bg-img overlay-bg-color light-color parallax parallax-background">

        <div class="container">

            <div class="row title">

                <h2 class="h2"><?php echo e($seo->title); ?></h2>

                <div class="page-breadcrumb"> <a><?php echo app('translator')->getFromJson('site.esas'); ?></a>/<span><?php echo e($seo->title); ?></span> </div>

            </div>

        </div>

    </section>

    <div class="clearfix"></div>

    <!-- End Intro Section -->



    <!-- Blog Post Section -->

    <section class="ptb ptb-sm-80">

        <div class="container">

            <div class="row">

                <!-- Post Bar -->


                <div class="col-sm-9 blog-post-hr post-section">


                    <div class="blog-post mb-30">
                        <?php if($advert): ?>

                            <div class="post-header">

                                <h2><?php echo e($advert->title); ?></h2>

                            </div>

                            <div class="post-media"> <img src="<?php echo e(route('home')); ?>/images/<?php echo e($advert->picture); ?>" alt="">  </div>

                            <div class="post-entry">
                                <?php echo $advert->text; ?>

                            </div>
                        <?php else: ?>
                            <h2><?php echo app('translator')->getFromJson('site.ad_not_found'); ?></h2>
                        <?php endif; ?>
                    </div>


                    <hr />

                </div>

                <!-- End Post Bar -->



                <!-- Sidebar -->

                <div class="col-sm-3 mt-sm-60">

                    <div class="sidebar-widget">

                        <h5>AXTAR</h5>

                        <div class="widget-search pt-15">

                            <form action="<?php echo e(route('search', app()->getLocale())); ?>" method="get">
                                <input class="form-full input-lg" type="text" value="" placeholder="Search Here"
                                       name="query" id="query">
                            </form>

                        </div>

                    </div>

                    <div class="sidebar-widget">

                        <h5><?php echo app('translator')->getFromJson('site.last_visits'); ?></h5>

                        <hr>

                        <ul class="widget-post pt-15">

                            <?php $__currentLoopData = $randNewses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $randItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('home.news_detail', [$randItem->lng->short_name, $randItem->name])); ?>"
                                       class="widget-post-media"> <img
                                                src="<?php echo e(route('home')); ?>/images/<?php echo e($randItem->image); ?>"
                                                alt="<?php echo e($randItem->title); ?>"> </a>

                                    <div class="widget-post-info">

                                        <h6>
                                            <a href="<?php echo e(route('home.news_detail', [$randItem->lng->short_name, $randItem->name])); ?>"><?php echo e($randItem->title); ?></a>
                                        </h6>

                                        <div class="post-meta"><span></span>
                                            <span><?php echo e(date('d.m.Y', strtotime($randItem->created_at))); ?></span></div>

                                    </div>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                    </div>
                </div>

                <!-- End Sidebar -->

            </div>

        </div>

    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $footer; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/page.blade.php ENDPATH**/ ?>