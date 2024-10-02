<?php $__env->startSection('content'); ?>

    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Cat pics</h1>
        <div class="row">
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-3">
                    <img src="../img/<?php echo e($row->id); ?>" alt="">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bástyai\Cats\resources\views/welcome.blade.php ENDPATH**/ ?>