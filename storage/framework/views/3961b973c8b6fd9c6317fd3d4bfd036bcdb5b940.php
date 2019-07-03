

<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">

    <div class="top-wrapper hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="guest"><?php echo app('translator')->getFromJson('site.welcome'); ?></div>
                </div>
                <div class="col-lg-5 col-md-6 hidden-sm">
                    <div class="top-header-add">
                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>Call</span> <?php echo e('+'.$generals->phone); ?></div>
                        <div class="book"><a href="javascript:void(0)"><i class="fa fa-globe" aria-hidden="true"></i><span>Book Online</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo"> <a href="index.html"><img src="<?php echo e(route('home').'/'.'images/'.$generals->image); ?>" alt="#" data-popupalt-original-title="null" title="#"></a> </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="navbar navbar-default desktop">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <ul id="nav" class="nav menu navbar-nav">
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <li>
                                        <a
                                                <?php if($menu->hasChildren()): ?>
                                                <?php else: ?>
                                                href="<?php echo e($menu->url()); ?>"
                                                <?php endif; ?>


                                        ><?php echo e($menu->title); ?>

                                            <?php if($menu->hasChildren()): ?>
                                                <i class="fa fa-circle"></i>
                                            <?php endif; ?>
                                        </a>
                                        <?php if($menu->hasChildren()): ?>

                                            <ul class="dropdown">
                                                <li>
                                                    <?php echo $__env->make('site.index.menu',['menus'=>$menu->children()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <!-- End Main Menu -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\electric\resources\views/site/index/topbar.blade.php ENDPATH**/ ?>