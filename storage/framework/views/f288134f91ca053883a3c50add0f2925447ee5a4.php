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
                        <h3>Single Blog</h3>
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
                <li>Single Blog</li>
            </ul>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="blog-post">
                        <!--Start single blog post-->
                        <div class="single-blog-post">
                            <div class="img-holder"> <img src="<?php echo e(asset('images/blog-single.jpg')); ?>" alt=""> </div>
                            <div class="text-holder">
                                <h3 class="blog-title"><?php echo e($advert->title); ?></h3>
                                <div class="meta-box"> <span class="thm-clr">Post Info</span>
                                    <ul class="meta-info">
                                        <li><span class="thm-clr">By:</span> <a href="#"><?php echo e($advert->user->name); ?></a></li>
                                        <li><span class="thm-clr">On:</span> <a href="#"><?php echo e($advert->created_at->format('d-F, Y')); ?></a></li>
                                        <li><span class="thm-clr">Category:</span>

                                            <?php $__currentLoopData = $advert->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="#"><?php echo e($cat->title); ?></a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <?php echo $advert->text; ?>

                                      </div>
                                <!--Start author slogan-->
                                
                                    
                                    
                                    
                                        
                                        
                                    
                                
                                <!--End author slogan-->
                                <!--Start bottom content box-->
                                
                                    
                                        
                                            
                                        
                                        
                                            
                                                
                                                
                                            
                                        
                                    
                                
                                <!--End bottom content box-->
                                <!--Start tag box-->
                                
                                    
                                        
                                            
                                                
                                                    
                                                    
                                                    
                                                    
                                                
                                            
                                            
                                                
                                            
                                        
                                    
                                
                                <!--End tag box-->
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start author box-->
                        
                            
                                
                            
                            
                                
                                    
                                        
                                        
                                            
                                            
                                            
                                                
                                                
                                                
                                                
                                            
                                        
                                    
                                
                            
                        
                        <!--End author box-->
                        <!--Start comment box-->
                        
                            
                                
                                    
                                        
                                    
                                    
                                    
                                        
                                        
                                            
                                                
                                                    
                                                
                                                
                                                    
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    
                                                
                                            
                                            
                                                
                                            
                                        
                                    
                                    
                                    
                                    
                                        
                                        
                                            
                                                
                                                    
                                                
                                                
                                                    
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    
                                                
                                            
                                            
                                                
                                            
                                        
                                    
                                    
                                
                            
                        
                        <!--End comment box-->
                        <!--Start add comment box-->
                        
                            
                                
                            
                            
                                
                                
                                    
                                    
                                    
                                    
                                    
                                
                            
                            
                                
                                    
                                        
                                            
                                                
                                                
                                            
                                            
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                                
                                            
                                        
                                        
                                            
                                                
                                            
                                        
                                    
                                
                            
                        
                        <!--End add comment box-->
                    </div>
                </div>

                <!--Start sidebar Wrapper-->
                <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->




                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Categories</h3>
                            </div>

                            <ul class="categories clearfix">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="#"><?php echo e($c->title); ?> <span>(<?php echo e($c->newses->count()); ?>)</span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar comment">
                            <div class="sec-title">
                                <h3>Recent Comments</h3>
                            </div>
                            <div class="comment-box">
                                <!--Start single item-->
                                <div class="single-item">
                                    <div class="date-box">
                                        <p>August 17, 2017</p>
                                    </div>
                                    <div class="single-box">
                                        <div class="left-content pull-left">
                                            <div class="inner-content">
                                                <div class="img-holder"> <img src="<?php echo e(asset('images/comment-1.jpg')); ?>" alt="">
                                                    <div class="overlay-style-one">
                                                        <div class="box">
                                                            <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Mark Mitchael</h5>
                                                    <p>It is long established fact</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-content pull-right">
                                            <div class="read-comment"> <a href="#"><span class="fa fa-long-arrow-right"></span></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="single-item mar-top">
                                    <div class="date-box">
                                        <p>July 08, 2017</p>
                                    </div>
                                    <div class="single-box">
                                        <div class="left-content pull-left">
                                            <div class="inner-content">
                                                <div class="img-holder"> <img src="<?php echo e(asset('images/comment-2.jpg')); ?>" alt="">
                                                    <div class="overlay-style-one">
                                                        <div class="box">
                                                            <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="title-holder">
                                                    <h5>Steve Bowerman</h5>
                                                    <p>When looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-content pull-right">
                                            <div class="read-comment"> <a href="#"><span class="fa fa-long-arrow-right"></span></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Popular Post</h3>
                            </div>
                            <ul class="popular-post">
                                <li>
                                    <div class="img-holder"> <img src="<?php echo e(asset('images/popular-post-1.jpg')); ?>" alt="">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">Lorem Ipsum is simply dummy <br>text of the printing?</a></h5>
                                        <h6 class="post-date"><i class="fa fa-calendar thm-clr" aria-hidden="true"></i> April 18, 2017</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder"> <img src="<?php echo e(asset('images/popular-post-2.jpg')); ?>" alt="">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">Lorem Ipsum is simply dummy <br>text of the printing?</a></h5>
                                        <h6 class="post-date"><i class="fa fa-calendar thm-clr" aria-hidden="true"></i> February 14, 2017</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder"> <img src="<?php echo e(asset('images/popular-post-3.jpg')); ?>" alt="">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content"> <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">Lorem Ipsum is simply dummy <br>text of the printing?</a></h5>
                                        <h6 class="post-date"><i class="fa fa-calendar thm-clr" aria-hidden="true"></i> January 16, 2017</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single-sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Tags</h3>
                            </div>
                            <ul class="popular-tag">
                                <li><a href="#">Electric</a></li>
                                <li><a href="#">Repair</a></li>
                                <li><a href="#">Maintainance</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Electric</a></li>
                                <li><a href="#">Repair</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                        <!--End single-sidebar-->
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $footer; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/news/show.blade.php ENDPATH**/ ?>