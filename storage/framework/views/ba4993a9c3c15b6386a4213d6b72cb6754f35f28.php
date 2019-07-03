<section class="top_section__block">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-12">
                <div class="single_top__block">
                    <div class="icon-box__block">
                        <i class="flaticon-stethoscope"></i>
                    </div>
                    <div class="single_text__block">
                        <h3><?php echo e($about->title); ?></h3>
                        <p>
                            <?php echo $about->description; ?>

                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/abouts.blade.php ENDPATH**/ ?>