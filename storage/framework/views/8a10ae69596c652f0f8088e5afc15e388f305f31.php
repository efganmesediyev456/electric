<?php $__env->startSection('title', 'Languages'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <?php echo $__env->make('admin.forms.lng_selector', ['lngs'=>$lngs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::open(['route'=>['admin.news.store'],'enctype'=>'multipart/form-data', 'method' => 'post','class'=>'form-horizontal form-label-left'])); ?>

        <?php $__currentLoopData = $lngs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row lng-form" id="<?php echo e($lng->u_id); ?>" <?php if(!$lng->default): ?> style="display: none" <?php endif; ?>>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Basliq',
                'name'=>'title',
                'lng'=>$lng,
                'value'=>old('title'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Name',
                'name'=>'name',
                'lng'=>$lng,
                'value'=>old('name'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.textarea', ['label' => 'Haqqinda',
                'name'=>'description',
                'lng'=>$lng,
                'value'=>old('description'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <?php echo $__env->make('admin.forms.ckeditor', ['label' => 'Text',
               'name'=>'text',
               'lng'=>$lng,
               'value'=>old('text'.$lng->u_id),
               'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cats">
                Categoriya
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="cats" name="categories[]" class="select2" multiple="multiple" style="width: 100%"
                        autocomplete="off">
                    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($option->u_id); ?>"><?php echo e($option->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">


        <?php echo $__env->make('admin.forms.file_image', ['label' => 'picture',
                'name'=>'image',
                'required'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="<?php echo e(URL::previous()); ?>"> <?php echo e(__('views.admin.users.edit.cancel')); ?></a>
                <button type="submit" class="btn btn-success"> <?php echo e(__('views.admin.users.edit.save')); ?></button>
            </div>
        </div>
        <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/users/edit.css'))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/users/edit.js'))); ?>

    <script>
        $('input[type="radio"]').on('click', function () {
            var forms = $('.lng-form');
            for (var i = 0; i < forms.length; i++) {
                if ($(forms[i]).attr('id') != $(this).val()) {
                    $(forms[i]).css('display', 'none');
                } else $(forms[i]).css('display', 'block');
            }
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/news/create.blade.php ENDPATH**/ ?>