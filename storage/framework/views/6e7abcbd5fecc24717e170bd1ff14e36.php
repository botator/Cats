<?php $__env->startSection('content'); ?>
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3"><?php echo e($result->title); ?></h1>
        <div class="mx-auto">
            <img src="../img/<?php echo e($result->id); ?>.jpg" alt="">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boton\Desktop\progi\Cats\resources\views/rnd.blade.php ENDPATH**/ ?>