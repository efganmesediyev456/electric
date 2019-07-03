<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="<?php echo e($name.$lng->u_id); ?>">
            <?php echo e($label); ?>

            <?php if($required): ?>
                <span class="required">*</span>
            <?php endif; ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="<?php echo e($name.$lng->u_id); ?>" type="number"
                   class="form-control col-md-7 col-xs-12 <?php if ($errors->has($name.$lng->u_id)) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first($name.$lng->u_id); ?> parsley-error <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                   name="<?php echo e($name.$lng->u_id); ?>" value="<?php echo e($value); ?>" <?php if($required): ?> required <?php endif; ?>>
            <?php if ($errors->has($name.$lng->u_id)) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first($name.$lng->u_id); ?>
            <ul class="parsley-errors-list filled">
                <?php echo e($message); ?>

            </ul>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/forms/number.blade.php ENDPATH**/ ?>