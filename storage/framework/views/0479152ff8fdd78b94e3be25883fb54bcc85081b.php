
<div class="banner-wrapper">
    <div id="first-slider" class="">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- Item 1 -->
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item <?php echo e('slide'.($key+1)); ?>


                        <?php if($key==0): ?>
                        <?php echo e('active'); ?>

                        <?php endif; ?>

                        ">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img data-animation="animated zoomInLeft" src="images/<?php echo e($slider->image); ?>" alt=""> </div>
                            <div class="col-md-8 col-sm-7 text-left">
                                <h1 data-animation="animated bounceInLeft" class=""><?php echo e($slider->text_bir); ?><span><?php echo e($slider->text_iki); ?></span></h1>
                                <p data-animation="animated bounceInLeft" class=""><?php echo e($slider->text_uc); ?></p>
                                <a class="btn btn-hero" data-animation="animated bounceInLeft" href="<?php echo e(route('home').'/'.$lng.'/'.$slider->button_path); ?>"><?php echo e($slider->button_text); ?></a>
                            </div>
                            <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft" src="images/<?php echo e($slider->image); ?>" alt=""> </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Item 2 -->

                <!-- Item 3 -->

            </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i><span class="sr-only">Next</span> </a>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/sliders.blade.php ENDPATH**/ ?>