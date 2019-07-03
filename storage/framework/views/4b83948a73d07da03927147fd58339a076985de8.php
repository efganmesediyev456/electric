<?php $__env->startSection('body_class','login'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <?php echo e(Form::open(['route' => 'login'])); ?>

                        <h1><?php echo e(__('views.auth.login.header')); ?></h1>

                        <div>
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>"
                                   placeholder="Login" required autofocus>
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control" name="password"
                                   placeholder="<?php echo e(__('views.auth.login.input_1')); ?>" required>
                        </div>
                        <div class="checkbox al_left">
                            <label>
                                <input type="checkbox"
                                       name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('views.auth.login.input_2')); ?>

                            </label>
                        </div>

                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(!$errors->isEmpty()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $errors->first(); ?>

                            </div>
                        <?php endif; ?>

                        <div>
                            <button class="btn btn-default submit" type="submit"><?php echo e(__('views.auth.login.action_0')); ?></button>
                            <a class="reset_pass" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('views.auth.login.action_1')); ?>

                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <span><?php echo e(__('views.auth.login.message_0')); ?></span>
                            <div>
                                <a href="<?php echo e(route('social.redirect', ['google'])); ?>" class="btn btn-success btn-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    Google+
                                </a>
                                <a href="<?php echo e(route('social.redirect', ['facebook'])); ?>" class="btn btn-success btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </a>
                                <a href="<?php echo e(route('social.redirect', ['twitter'])); ?>" class="btn btn-success btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>
                            </div>
                        </div>

                        <?php if(config('auth.users.registration')): ?>
                            <div class="separator">
                                <p class="change_link"><?php echo e(__('views.auth.login.message_1')); ?>

                                    <a href="<?php echo e(route('register')); ?>" class="to_register"> <?php echo e(__('views.auth.login.action_2')); ?> </a>
                                </p>

                                <div class="clearfix"></div>
                                <br/>

                                <div>
                                    <div class="h1"><?php echo e(config('app.name')); ?></div>
                                    <p>&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo e(__('views.auth.login.copyright')); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php echo e(Form::close()); ?>

                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##

    <?php echo e(Html::style(mix('assets/auth/css/login.css'))); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electric\resources\views/auth/login.blade.php ENDPATH**/ ?>