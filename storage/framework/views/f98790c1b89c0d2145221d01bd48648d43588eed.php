

<?php $__env->startSection('container'); ?>
<div class="card cari-aula" style="padding: 20px;">
    <div class="card-body">
        <form action="<?php echo e(url('/cari')); ?>" method="GET">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lokasi Aula</label>
                <select class="custom-select rounded-0" id="exampleSelectRounded0" name="kota">
                    <option value="" selected></option>
                    <?php
                    // Loop untuk mengambil satu per satu.
                    foreach ($tambah as $t) : ?>
                        <option value="<?php echo e($t); ?>"><?php echo e($t); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Hari Mulai</label>
                        <select class="custom-select rounded-0" id="exampleSelectRounded0" name="hari">
                            <option value="" selected></option>
                            <?php
                            // Loop untuk mengambil satu per satu.
                            foreach ($hari as $h) : ?>
                                <option value="<?php echo e($h); ?>"><?php echo e($h); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jam Mulai</label>
                        <select class="custom-select rounded-0" id="exampleSelectRounded0" name="jam">
                            <option value="" selected></option>
                            <?php
                            // Loop untuk mengambil satu per satu.
                            foreach ($jam as $j) : ?>
                                <option value="<?php echo e($j); ?>"><?php echo e($j); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col" style="margin-top: 30px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container" style=" margin-top: 40px;">
    <div class="row">
        <div class="col-4">
            <div class="card float-start" style="width: 18rem;">
                <img src="<?php echo e(URL::asset('images/iklan.png')); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-8">
            <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo e(URL::asset('images/jakarta.jpg')); ?>" class="img-fluid rounded-start" style="width: 100%; height: 100%;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($hsl->nama_tempat); ?></h5>
                            <p class="card-text"><?php echo e($hsl->alamat); ?></p>
                            <div class="row">
                                <div class="col-sm-6">

                                    <p class="card-text" style="color: #007bff;"><small>Rp.<?php echo e($hsl->harga); ?> / Hari</small></p>
                                </div>
                                <div class="col-sm-6">

                                    <a href="<?php echo e(url('/detail/'.$hsl->id)); ?>">
                                        <div class="col" style="margin-top: 30px;">
                                            <button type="button" class="btn btn-primary">Pesan Sekarang</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\aulaku\resources\views//home/pencarian.blade.php ENDPATH**/ ?>