<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH /Users/kcollins/PhpstormProjects/nova-seo/resources/views/layout.blade.php ENDPATH**/ ?>