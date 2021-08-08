<?php $__env->startSection('content'); ?>

<?php echo $__env->make('nova::auth.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form
    class="bg-white shadow rounded-lg p-8 max-w-login mx-auto"
    method="POST"
    action="<?php echo e(route('nova.login')); ?>"
>
    <?php echo e(csrf_field()); ?>


    <?php $__env->startComponent('nova::auth.partials.heading'); ?>
        <?php echo e(__('Welcome Back!')); ?>

    <?php if (isset($__componentOriginal02ff6066a846884865ea5d72d8659d4fcf8ad130)): ?>
<?php $component = $__componentOriginal02ff6066a846884865ea5d72d8659d4fcf8ad130; ?>
<?php unset($__componentOriginal02ff6066a846884865ea5d72d8659d4fcf8ad130); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <?php if($errors->any()): ?>
    <p class="text-center font-semibold text-danger my-3">
        <?php if($errors->has('email')): ?>
            <?php echo e($errors->first('email')); ?>

        <?php else: ?>
            <?php echo e($errors->first('password')); ?>

        <?php endif; ?>
        </p>
    <?php endif; ?>

    <div class="mb-6 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label class="block font-bold mb-2" for="email"><?php echo e(__('Email Address')); ?></label>
        <input class="form-control form-input form-input-bordered w-full" id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
    </div>

    <div class="mb-6 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label class="block font-bold mb-2" for="password"><?php echo e(__('Password')); ?></label>
        <input class="form-control form-input form-input-bordered w-full" id="password" type="password" name="password" required>
    </div>

    <div class="flex mb-6">
        <label class="flex items-center text-xl font-bold">
            <input class="" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
            <span class="text-base ml-2"><?php echo e(__('Remember Me')); ?></span>
        </label>


        <?php if(\Laravel\Nova\Nova::resetsPasswords()): ?>
        <div class="ml-auto">
            <a class="text-primary dim font-bold no-underline" href="<?php echo e(route('nova.password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

            </a>
        </div>
        <?php endif; ?>
    </div>

    <button class="w-full btn btn-default btn-primary hover:bg-primary-dark" type="submit">
        <?php echo e(__('Login')); ?>

    </button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('nova::auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kcollins/PhpstormProjects/nova-seo/vendor/laravel/nova/src/../resources/views/auth/login.blade.php ENDPATH**/ ?>