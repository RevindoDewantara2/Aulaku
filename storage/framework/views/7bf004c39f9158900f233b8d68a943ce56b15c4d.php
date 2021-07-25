

<?php $__env->startSection('container'); ?>

<div class="container" style="margin-top: 20px;">
    <h3>History Pemesanan</h3>
    <hr>
    <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h5><?php echo e($hsl->date_created); ?></h4>
        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo e(URL::asset('images/jakarta.jpg')); ?>" class="img-fluid rounded-start" style="width: 100%; height: 100%;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($hsl->nama_pesanan); ?></h5>
                        <p class="card-text"><?php echo e($hsl->nama_hall); ?></p>
                        <div class="row">
                            <div class="col-sm-6">

                                <p class="card-text" style="color: #007bff;"><small><?php echo e($hsl->totalharga); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\RPL\applications\aulaku\resources\views/home/history.blade.php ENDPATH**/ ?>