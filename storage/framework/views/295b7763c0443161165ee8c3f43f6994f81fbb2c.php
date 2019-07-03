<?php $__env->startSection('topbar'); ?>
    <?php echo $topbar; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('general_header'); ?>
    <?php echo $general; ?>

<?php $__env->stopSection(); ?>


    

<?php $__env->startSection('content'); ?>
    <section class="inner-intro bg-img overlay-bg-color light-color parallax parallax-background">

        <div class="container">

            <div class="row title">

                <h2 class="h2"><?php echo e($seo->title); ?></h2>

                <div class="page-breadcrumb"><a
                            href="<?php echo e(route('home')); ?>"><?php echo app('translator')->getFromJson('site.esas'); ?></a>/<span><?php echo e($seo->title); ?></span></div>

            </div>

        </div>

    </section>



    <!-- End Intro Section -->



    <!-- Blog Post Section -->

    <section class="ptb ptb-sm-80">

        <div class="container">

            <div class="row">

                <!-- Post Item -->

                <div class="col-sm-9">

                    <div class="row">

                        <div class="col-md-12 blog-post-hr">
                            <?php $__currentLoopData = $newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="blog-post mb-45">

                                    <div class="post-media"><img src="<?php echo e(route('home')); ?>/images/<?php echo e($item->image); ?>"
                                                                 alt="<?php echo e($item->title); ?>"/> <span
                                                class="event-calender blog-date"> <?php echo e(date('d', strtotime($item->created_at))); ?> <span><?php echo e(date('M', strtotime($item->created_at))); ?></span> </span>
                                    </div>

                                    <div class="post-meta"><span><?php echo app('translator')->getFromJson('site.by'); ?> <a><?php echo e($item->user->name); ?></a>

                                    <div class="post-more-link pull-right">

                                        <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i
                                                        class="fa fa-facebook"></i> </a> <a href="#"
                                                                                            class="twitter-icon"> <i
                                                        class="fa fa-twitter"></i> </a> <a href="#"
                                                                                           class="googleplus-icon"> <i
                                                        class="fa fa-google-plus"></i> </a> <a href="#"
                                                                                               class="linkedin-icon"> <i
                                                        class="fa fa-linkedin"></i> </a></div>

                                        <a class="btn btn-md btn-color-line xs-hidden"> <i
                                                    class="ion-android-share-alt"></i></a>
                                    </div>

                                    </div>

                                    <div class="post-header">

                                        <h2>
                                            <a href="<?php echo e(route('home.news_detail', [$item->lng->short_name, $item->name])); ?>"><?php echo e($item->title); ?></a>
                                        </h2>

                                    </div>

                                    <div class="post-entry">

                                        <?php echo $item->description; ?>


                                    </div>

                                    <div class="post-more-link pull-left"><a
                                                href="<?php echo e(route('home.news_detail', [$item->lng->short_name, $item->name])); ?>"
                                                class="btn btn-md btn-color-line"><?php echo app('translator')->getFromJson('site.read_more'); ?></a></div>

                                </div>

                                <hr/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                    </div>


                    <!-- Pagination Nav -->

                    <div class="pagination-nav text-left mt-60 mtb-xs-30">

                        <ul>
                            <?php if($newses->currentPage() != 1): ?>
                                <li><a href="<?php echo e($newses->previousPageUrl()); ?>"><i class="fa fa-angle-left"></i></a></li>
                            <?php endif; ?>
                            <?php for($i = 1; $i<=$newses->lastPage(); $i++): ?>
                                <?php if($newses->currentPage() == $i): ?>
                                    <li class="active"><a><?php echo e($i); ?></a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo e($newses->url($i)); ?>"><?php echo e($i); ?></a></li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if($newses->currentPage() != $newses->lastPage()): ?>
                                <li><a href="<?php echo e($newses->nextPageUrl()); ?>"><i class="fa fa-angle-right"></i></a></li>
                            <?php endif; ?>
                        </ul>

                    </div>

                    <!-- End Pagination Nav -->


                </div>

                <!-- End Post Item -->


                <!-- Sidebar -->

                <div class="col-sm-3 mt-sm-60">

                    <div class="sidebar-widget">

                        <h5><?php echo app('translator')->getFromJson('site.search'); ?></h5>

                        <div class="widget-search pt-15">
                            <form action="<?php echo e(route('search', app()->getLocale())); ?>" method="get">
                            <input class="form-full input-lg" type="text" value="" placeholder="<?php echo app('translator')->getFromJson('site.burada_axtar'); ?>"
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
                                            <span><?php echo e(date('d.M.Y', strtotime($randItem->created_at))); ?></span></div>

                                    </div>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                    </div>
                </div>
            </div>

        </div>

    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $footer; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/news/index.blade.php ENDPATH**/ ?>