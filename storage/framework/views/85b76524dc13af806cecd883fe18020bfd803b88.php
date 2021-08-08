<?php $__env->startSection('content'); ?>
    <div class="flex justify-center items-center py-8">
        <div class="mr-5">
            <h1 class="text-7xl font-semibold">When Pigs Fly</h1>
            <h2 class="text-4xl">A blog dedicated to the love of pigs.</h2>
        </div>
        <div>
            <img class="object-contain h-48 w-full" src="<?php echo e(asset('img/pig-face-vector.png')); ?>" alt="Pig Header Image">
        </div>
    </div>
    <hr/>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kcollins/PhpstormProjects/nova-seo/resources/views/welcome.blade.php ENDPATH**/ ?>