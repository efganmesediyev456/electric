<section class="latest__block ptb ptb-sm-80 gray-bg">
    <div class="container">
        <div class="row text-center pb-50 pb-xs-30">
            <div class="col-md-12">
                <div class="heding_sec">
                    <h2><?php echo app('translator')->getFromJson('site.news_index'); ?></h2>
                    <span class="bot_line"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-sm-30 mb-xs-30">
                <div class="img-scale">
                    <figure>
                        <img src="images/<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>">
                    </figure>
                    <div class="latest__block-post">
                        <div class="meta-post">
                            <?php echo e(date('d.m.Y', strtotime($item->created_at))); ?>

                        </div>
                        <h3 class="latest__block-title"><a href="<?php echo e(route('home.news_detail',[$item->lng->short_name, $item->name])); ?>" title="Nevroloqların Milli Assosiasiyasının üzvləri ilə görüş"><?php echo e($item->title); ?></a></h3>
                        <p>
                            <?php echo e($item->description); ?>

                        </p>
                        <div class="flat-link flat-arrow sm  ">
                            <a href="<?php echo e(route('home.news_detail',[$item->lng->short_name, $item->name])); ?>" class="more_btn__block"><?php echo app('translator')->getFromJson('site.more'); ?> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/news.blade.php ENDPATH**/ ?>