<footer>
    <div class="main_footer__block pb-0 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_box__block">
                        <h4><?php echo e($about->title); ?></h4>
                        <?php echo $about->description; ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_box__block">
                        <h4><?php echo app('translator')->getFromJson('site.last_ads'); ?></h4>
                        <ul>


                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_box__block address-box">
                        <h4><?php echo app('translator')->getFromJson('site.contact'); ?></h4>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    <?php echo app('translator')->getFromJson('site.call_us'); ?> <?php echo e($general->phone); ?>

                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <a href="mailto:<?php echo e($general->email); ?>"><?php echo e($general->email); ?></a>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    <?php echo e($general->address); ?>

                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyriight_block ptb-15 mt-25">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="<?php echo e(route('home',[$general->lng->short_name])); ?>" class="footer__block-logo"><img src="<?php echo e(route('home')); ?>/images/<?php echo e($general->image); ?>" alt=""></a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>
                            <?php echo app('translator')->getFromJson('site.all_right_reserved'); ?> © <?php echo e(date('Y')); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/footer.blade.php ENDPATH**/ ?>