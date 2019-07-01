<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php print app('meta')->render(); ?>

        
        <?php echo e(Html::style(mix('assets/app/css/app.css'))); ?>


        
        <?php echo $__env->yieldContent('styles'); ?>

        
        <?php echo $__env->yieldContent('head'); ?>
        <script src="<?php echo e(asset('vendor/jquery-2.2.4.min.js')); ?>"></script>

    </head>
    <body class="<?php echo $__env->yieldContent('body_class'); ?>">

        
        <?php echo $__env->yieldContent('page'); ?>

        
        <?php echo e(Html::script(mix('assets/app/js/app.js'))); ?>


        
        <script> window.Laravel = {"locale":"en"}</script>

        
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/electric/resources/views/layouts/app.blade.php ENDPATH**/ ?>