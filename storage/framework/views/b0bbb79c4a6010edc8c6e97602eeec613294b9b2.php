<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li>
    <a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->title); ?></a>
    <?php if($menu->hasChildren()): ?>
    <span class="submenu-button"></span>
    <ul class="dropdown-menu">
        <li>
            <?php echo $__env->make('site.index.menu',['menus'=>$menu->children()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </li>
    </ul>
    <?php endif; ?>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/menu.blade.php ENDPATH**/ ?>