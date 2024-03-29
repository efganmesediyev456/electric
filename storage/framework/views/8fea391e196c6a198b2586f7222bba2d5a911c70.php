<?php $__env->startSection('title', 'Languages'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <?php echo $__env->make('admin.forms.lng_selector', ['lngs'=>$lngs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::open(['route'=>['admin.sliders.update', $sliders[0]->u_id],'enctype'=>'multipart/form-data', 'method' => 'put','class'=>'form-horizontal form-label-left'])); ?>

        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($slider->lng): ?>
                <div class="row lng-form" id="<?php echo e($slider->l_id); ?>"
                     <?php if(!$slider->lng->default): ?> style="display: none" <?php endif; ?>>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'Basliq',
                            'name'=>'title',
                            'lng'=>$slider->lng,
                            'value'=>$slider->title,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('admin.forms.textarea', ['label' => 'description',
                            'name'=>'description',
                            'lng'=>$slider->lng,
                            'value'=>$slider->description,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'Duyme yazisi',
                            'name'=>'button_text',
                            'lng'=>$slider->lng,
                            'value'=>$slider->button_text,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'Duyme linki',
                            'name'=>'button_path',
                            'lng'=>$slider->lng,
                            'value'=>$slider->button_path,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'Text 1',
                            'name'=>'text_bir',
                            'lng'=>$slider->lng,
                            'value'=>$slider->text_bir,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                    <?php echo $__env->make('admin.forms.text', ['label' => 'Text 2',
                            'name'=>'text_iki',
                            'lng'=>$slider->lng,
                            'value'=>$slider->text_iki,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('admin.forms.text', ['label' => 'Text 3',
                            'name'=>'text_uc',
                            'lng'=>$slider->lng,
                            'value'=>$slider->text_uc,
                            'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <img style="margin-top:15px;margin-bottom: 15px;" class="col-md-6 col-md-offset-3 my-2"  src="<?php echo e(asset('images/'.$slider->image)); ?>">

        <?php echo $__env->make('admin.forms.file_image', ['label' => 'Sekil',
                       'name'=>'image',
                       'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="<?php echo e(URL::previous()); ?>"> <?php echo e(__('views.admin.users.edit.cancel')); ?></a>
                <button type="submit" class="btn btn-success"> <?php echo e(__('views.admin.users.edit.save')); ?></button>
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
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/sliders/edit.blade.php ENDPATH**/ ?>