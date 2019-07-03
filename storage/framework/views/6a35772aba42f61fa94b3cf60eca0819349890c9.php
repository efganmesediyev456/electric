<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="<?php echo e($name.$lng->u_id); ?>">
            <?php echo e($label); ?>

            <?php if($required): ?>
                <span class="required">*</span>
            <?php endif; ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="<?php echo e($name.$lng->u_id); ?>" class="ck" id="text"
                      rows="5" <?php if($required): ?> required <?php endif; ?>> <?php echo $value; ?></textarea>
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
            <script>
                $('.ck').ckeditor();
                config.disallowedContent = 'br';
                // $('.textarea').ckeditor(); // if class is prefered.
            </script>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/forms/ckeditor.blade.php ENDPATH**/ ?>