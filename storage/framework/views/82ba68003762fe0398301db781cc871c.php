<?php
$szam = 1;
?>

<?php $__env->startSection('content'); ?>
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Authors</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Author name</th>
                    <th>Author's page</th>
                </tr>
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($szam); ?><?php $szam++;?></td>
                        <td><?php echo e($row->author); ?></td>
                        <td><?php echo e($row->author_link); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </thead>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boton\Desktop\progi\Cats\resources\views/authors.blade.php ENDPATH**/ ?>