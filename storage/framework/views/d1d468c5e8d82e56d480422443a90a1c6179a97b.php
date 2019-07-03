<?php $__env->startSection('title', 'Add'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Basliq</th>
                <th>Etrafli</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($about->u_id); ?></td>
                    <td><?php echo e($about->lng->org_name); ?></td>
                    <td><?php echo e($about->title); ?></td>
                    <td><?php echo e($about->description); ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.abouts.edit', [$about->u_id])); ?>"
                           data-toggle="tooltip" data-placement="top"
                           data-title="<?php echo e(__('views.admin.users.index.edit')); ?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="pull-right">
            <?php echo e($abouts->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/abouts/index.blade.php ENDPATH**/ ?>