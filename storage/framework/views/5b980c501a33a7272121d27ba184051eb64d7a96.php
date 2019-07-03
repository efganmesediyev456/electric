<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="<?php echo e($name); ?>">
            <?php echo e($label); ?>

            <?php if($required): ?>
                <span class="required">*</span>
            <?php endif; ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="<?php echo e($name); ?>" type="file" accept="image/*" class="col-md-7 col-xs-12"
                   name="<?php echo e($name); ?>" <?php if($required): ?> required <?php endif; ?>>
            <?php if ($errors->has($name)) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first($name); ?>
            <ul class="parsley-errors-list filled">
                <?php echo e($message); ?>

            </ul>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/forms/file_image.blade.php ENDPATH**/ ?>