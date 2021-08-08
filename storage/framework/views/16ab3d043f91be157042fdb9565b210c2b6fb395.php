<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-full font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(\Laravel\Nova\Nova::name()); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('app.css', 'vendor/nova')); ?>">

    <!-- Custom Meta Data -->
    <?php echo $__env->make('nova::partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Theme Styles -->
    <?php $__currentLoopData = \Laravel\Nova\Nova::themeStyles(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicPath): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="<?php echo e($publicPath); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>
<body class="bg-40 text-black h-full">
    <div class="h-full">
        <div class="px-view py-view mx-auto">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH /Users/kcollins/PhpstormProjects/nova-seo/vendor/laravel/nova/src/../resources/views/auth/layout.blade.php ENDPATH**/ ?>