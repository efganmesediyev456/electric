<?php $__env->startSection('title', 'Languages'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <?php echo $__env->make('admin.forms.lng_selector', ['lngs'=>$lngs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::open(['route'=>['admin.menus.store'],'enctype'=>'multipart/form-data', 'method' => 'post', 'class'=>'form-horizontal form-label-left'])); ?>

        <?php $__currentLoopData = $lngs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row lng-form" id="<?php echo e($lng->u_id); ?>" <?php if(!$lng->default): ?> style="display: none" <?php endif; ?>>

                <?php echo $__env->make('admin.forms.number', ['label'=>'Ordering',
                'name'=>'ordering',
                'value'=>old('ordering'.$lng->u_id),
                'lng'=>$lng,
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Title',
                'name'=>'title',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Description',
                'name'=>'description',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Keyword',
                'name'=>'keyword',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Name',
                'name'=>'name',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.ckeditor', ['label' => 'Text',
                'name'=>'text',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.forms.text', ['label' => 'Url tag',
                'name'=>'url_tag',
                'lng'=>$lng,
                'value'=>old('ordering'.$lng->u_id),
                'required'=>$lng->default], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->make('admin.forms.file_image', ['label' => 'Picture',
                'name'=>'picture',
                'required'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('admin.forms.file_image', ['label' => 'Arxa fon',
                'name'=>'bg_image',
                'required'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub_id">
                    Alt menu
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select required class="select2_group form-control" name="sub_id" id="sub_id">
                        <option value="0">---</option>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option->u_id); ?>"><?php echo e($option->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary"
                   href="<?php echo e(URL::previous()); ?>"> <?php echo e(__('views.admin.users.edit.cancel')); ?></a>
                <button type="submit"
                        class="btn btn-success"> <?php echo e(__('views.admin.users.edit.save')); ?></button>
            </div>
        </div>
        <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
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
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/menus/create.blade.php ENDPATH**/ ?>