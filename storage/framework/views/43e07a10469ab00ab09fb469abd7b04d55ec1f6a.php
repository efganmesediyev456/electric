<?php $__env->startSection('title', 'Languages'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <?php echo $__env->make('admin.forms.lng_selector', ['lngs'=>$lngs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::open(['route'=>['admin.generals.update',$generals[0]->u_id],'enctype'=>'multipart/form-data', 'method' => 'put','class'=>'form-horizontal form-label-left'])); ?>

        <?php $__currentLoopData = $generals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $general): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($general->lng): ?>
                <div class="row lng-form" id="<?php echo e($general->l_id); ?>"
                     <?php if(!$general->lng->default): ?> style="display: none" <?php endif; ?>>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'address',
                        'name'=>'address',
                        'lng'=>$general->lng,
                        'value'=>$general->address,
                        'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'Email',
                        'name'=>'email',
                        'lng'=>$general->lng,
                        'value'=>$general->email,
                        'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('admin.forms.text', ['label' => 'Telefon',
                        'name'=>'phone',
                        'lng'=>$general->lng,
                        'value'=>$general->phone,
                        'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('admin.forms.file_image', ['label' => 'Sekil',
               'name'=>'image',
               'required'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/generals/edit.blade.php ENDPATH**/ ?>