<?php $__env->startSection('title', 'Categoriyalar'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="<?php echo e(route('admin.categories.create')); ?>"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Basliq</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cat->u_id); ?></td>
                    <td><?php echo e($cat->title); ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.categories.edit', [$cat->u_id])); ?>"
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
            <?php echo e($cats->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>