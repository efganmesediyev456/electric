<div class="middel-part__block ptb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a href="<?php echo e(route('home',[$general->lng->short_name])); ?>"> <img src="<?php echo e(route('home')); ?>/images/<?php echo e($general->image); ?>" alt="Logo"> </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="top-info__block text-right">
                    <ul>
                        <li>
                            <i class="ion-ios-location-outline"></i>
                            <p>
                                <?php echo app('translator')->getFromJson('site.address'); ?> <span><?php echo e($general->address); ?></span>
                            </p>
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>
                            <p>
                                <?php echo app('translator')->getFromJson('site.phone'); ?> <span><?php echo e($general->phone); ?></span>
                            </p>
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>
                            <p>
                                <?php echo app('translator')->getFromJson('site.email'); ?> <span><?php echo e($general->email); ?></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/general_header.blade.php ENDPATH**/ ?>