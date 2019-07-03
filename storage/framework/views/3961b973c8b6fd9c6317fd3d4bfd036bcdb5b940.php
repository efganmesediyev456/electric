<div class="top-part__block ptb-15">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <p>
                     <?php echo app('translator')->getFromJson('site.welcome'); ?>
                </p>
            </div>
            <div class="col-sm-4 lng-box">
                <?php $__currentLoopData = $lngs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('home')); ?>/<?php echo e($lng->short_name); ?>" title="<?php echo e($lng->short_name); ?>">
                        <img <?php if($lng->short_name == app()->getLocale()): ?> class="active-lang"  <?php endif; ?>  src="<?php echo e(route('home')); ?>/images/<?php echo e($lng->icon); ?>" alt="">
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-sm-3">
                <div class="social-link__block text-right">
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo $social->link; ?>"><img src="<?php echo e(route('home')); ?>/images/<?php echo e($social->icon); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <a href="#" class="search-header"><i class="fa fa-search"></i>
                        <div class="search-input-header">
                        <form action="<?php echo e(route('search', app()->getLocale())); ?>" method="get">
                            <input type="text" placeholder="<?php echo app('translator')->getFromJson('site.search'); ?>"
                                   name="query">
                        </form>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/topbar.blade.php ENDPATH**/ ?>