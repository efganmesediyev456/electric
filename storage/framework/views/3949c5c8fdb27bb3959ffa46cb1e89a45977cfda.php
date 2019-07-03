<?php $__env->startSection('title', 'Add'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="<?php echo e(route('admin.menus.create')); ?>"><i class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>ordering</th>
                <th>title</th>
                <th>description</th>
                <th>keyword</th>
                <th>name</th>
                <th>url_tag</th>
                <th>picture</th>
                <th>Arxa sekil</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($menu->u_id); ?></td>
                    <td><?php echo e($menu->lng->org_name); ?></td>
                    <td><?php echo e($menu->ordering); ?></td>
                    <td><?php echo e($menu->title); ?></td>
                    <td><?php echo e($menu->description); ?></td>
                    <td><?php echo e($menu->keyword); ?></td>
                    <td><?php echo e($menu->name); ?></td>
                    <td><?php echo e($menu->url_tag); ?></td>
                    <td><img src="<?php echo e(route('home')); ?>/images/<?php echo e($menu->picture); ?>" width="30px" alt="<?php echo e($menu->picture); ?>"></td>
                    <td><img src="<?php echo e(route('home')); ?>/images/<?php echo e($menu->bg_image); ?>" width="30px" alt="<?php echo e($menu->bg_image); ?>"></td>
                    <td>
                        <?php if(!$menu->trashed()): ?>
                            <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.menus.edit', [$menu->u_id])); ?>"
                               data-toggle="tooltip" data-placement="top"
                               data-title="<?php echo e(__('views.admin.users.index.edit')); ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(auth()->user()->hasRole('administrator')): ?>
                            <?php if($menu->trashed()): ?>
                                <?php echo e(Form::open(['route'=>['admin.menus.restore', $menu->u_id],'method' => 'post','style'=>'display:inline'])); ?>

                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                    <i class="fa fa-undo"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                                    <?php echo e(Form::open(['route'=>['admin.menus.forceDelete', $menu->u_id],'method' => 'post','style'=>'display:inline'])); ?>

                                    <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                            data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <?php echo e(Form::close()); ?>

                            <?php else: ?>
                                <?php echo e(Form::open(['route'=>['admin.menus.destroy', $menu->u_id],'method' => 'delete','style'=>'display:inline'])); ?>

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
            <?php echo e($menus->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/menus/index.blade.php ENDPATH**/ ?>