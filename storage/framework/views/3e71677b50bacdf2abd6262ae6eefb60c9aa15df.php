<?php $__env->startSection('title', 'Add'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="<?php echo e(route('admin.sliders.create')); ?>"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Basliq</th>
                <th>Haqqinda</th>
                <th>Text_1</th>
                <th>Text_2</th>
                <th>Text_3</th>
                <th>duymenin yazisi</th>
                <th>Duymenin linki</th>
                <th>Sekil</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($slider->u_id); ?></td>
                    <td><?php echo e($slider->lng->org_name); ?></td>
                    <td><?php echo e($slider->title); ?></td>
                    <td><?php echo e($slider->description); ?></td>

                    <td><?php echo e($slider->text_bir); ?></td>
                    <td><?php echo e($slider->text_iki); ?></td>
                    <td><?php echo e($slider->text_uc); ?></td>



                    <td><?php echo e($slider->button_text); ?></td>
                    <td><?php echo e($slider->button_path); ?></td>
                    <td><img src="<?php echo e(route('home')); ?>/images/<?php echo e($slider->image); ?>" width="30px"
                             alt="<?php echo e($slider->title); ?>"></td>
                    <td>
                        <?php if(!$slider->trashed()): ?>
                            <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.sliders.edit', [$slider->u_id])); ?>"
                               data-toggle="tooltip" data-placement="top"
                               data-title="<?php echo e(__('views.admin.users.index.edit')); ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(auth()->user()->hasRole('administrator')): ?>
                            <?php if($slider->trashed()): ?>
                                <?php echo e(Form::open(['route'=>['admin.sliders.restore', $slider->u_id],'method' => 'post','style'=>'display:inline'])); ?>

                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                    <i class="fa fa-undo"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                                <?php echo e(Form::open(['route'=>['admin.sliders.forceDelete', $slider->u_id],'method' => 'post','style'=>'display:inline'])); ?>

                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                            <?php else: ?>
                                <?php echo e(Form::open(['route'=>['admin.sliders.destroy', $slider->u_id],'method' => 'delete','style'=>'display:inline'])); ?>

                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="pull-right">
            <?php echo e($sliders->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/sliders/index.blade.php ENDPATH**/ ?>