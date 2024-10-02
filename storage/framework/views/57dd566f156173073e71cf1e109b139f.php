<?php $__env->startSection('content'); ?>
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3"><?php echo e($result->title); ?></h1>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="../img/<?php echo e($result->id); ?>.jpg" alt="">
            </div>
            <div class="col">
                <table class="table border">
                    <tr>
                        <th class="border">Stock image page</th>
                        <td ><a target="_blank" href="https://<?php echo e($result->site); ?>"><?php echo e($result->site); ?></a></td>
                    </tr>
                    <tr>
                        <th class="border">Direct link to the pic</th>
                        <td ><a target="_blank" href="https://<?php echo e($result->direct_link); ?>" ><?php echo e($result->direct_link); ?></a></td>
                    </tr>
                    <tr>
                        <th class="border">Author</th>
                        <td ><?php echo e($result->author); ?></td>
                    </tr>
                    <tr>
                        <th class="border">Author's page</th>
                        <td ><a target="_blank" href="https://<?php echo e($result->author_link); ?>"><?php echo e($result->author_link); ?></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boton\Desktop\progi\Cats\resources\views/catspage.blade.php ENDPATH**/ ?>