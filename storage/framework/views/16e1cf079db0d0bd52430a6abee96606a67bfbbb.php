<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group parent">
        <?php $__currentLoopData = $lngs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-4 col-xs-6 radio_container">
                <label>
                    <span class="country <?php if($lng->default): ?> active <?php endif; ?> "><?php echo e($lng->org_name); ?></span>
                    <input type="radio" <?php if($lng->default): ?> checked <?php endif; ?>
                    class="form-control col-md-7 col-xs-12 radio-inline <?php if ($errors->has('l_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('l_id'); ?> parsley-error <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                           name="l_id" value="<?php echo e($lng->u_id); ?>" required>
                    <span class="checkmark"></span>
                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/forms/lng_selector.blade.php ENDPATH**/ ?>