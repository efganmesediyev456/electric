<?php $__env->startSection('title', 'Add'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row x_panel">
        <a style="float: right;" class="btn btn-success" href="<?php echo e(route('admin.books.create')); ?>"><i
                    class="fa fa-plus"></i> Əlavə et </a>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Dil</th>
                <th>Kitabin adi</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->u_id); ?></td>
                    <td><?php echo e($book->lng->org_name); ?></td>
                    <td><?php echo e($book->name); ?></td>
                    <td><?php echo e($book->path); ?></td>
                    <td>
                        <?php if(!$book->trashed()): ?>
                            <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.books.edit', [$book->u_id])); ?>"
                               data-toggle="tooltip" data-placement="top"
                               data-title="<?php echo e(__('views.admin.users.index.edit')); ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(auth()->user()->hasRole('administrator')): ?>
                            <?php if($book->trashed()): ?>
                                <?php echo e(Form::open(['route'=>['admin.books.restore', $book->u_id],'method' => 'post','style'=>'display:inline'])); ?>

                                <button type="submit" class="btn btn-xs btn-primary user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                    <i class="fa fa-undo"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                                <?php echo e(Form::open(['route'=>['admin.books.forceDelete', $book->u_id],'method' => 'post','style'=>'display:inline'])); ?>

                                <button type="submit" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip"
                                        data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                            <?php else: ?>
                                <?php echo e(Form::open(['route'=>['admin.books.destroy', $book->u_id],'method' => 'delete','style'=>'display:inline'])); ?>

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
            <?php echo e($books->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/admin/books/index.blade.php ENDPATH**/ ?>