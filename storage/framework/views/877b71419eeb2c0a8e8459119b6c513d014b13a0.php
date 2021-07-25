

<?php $__env->startSection('container'); ?>
<div class="container" style="margin-top: 20px;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;"><?php echo e($model->nama_tempat); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($model->alamat); ?> Kota <?php echo e($model->kota); ?></h6>
            <hr style="background-color: #36454F;">
            <img src="<?php echo e(URL::asset('images/jakarta.jpg')); ?>" style="width: 1070px;" alt="">
            <hr>
            <h5 style="font-weight: bold;">Info Ruangan</h5>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 100px;">
                            <p>Luas Aula</p>
                        </td>
                        <td style="width: 20px;">
                            <p>:</p>
                        </td>
                        <td>
                            <p> <?php echo e($model->luas); ?>m/s</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Jumlah Kursi</p>
                        </td>
                        <td>
                            <p>:</p>
                        </td>
                        <td>
                            <p> <?php echo e($model->kapasitas); ?> kursi</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Hari Operasi</p>
                        </td>
                        <td>
                            <p>:</p>
                        </td>
                        <td>
                            <p> <?php echo e($model->hari_mulai); ?> s/d <?php echo e($model->hari_selesai); ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Jam Operasi</p>
                        </td>
                        <td>
                            <p>:</p>
                        </td>
                        <td>
                            <p> <?php echo e($model->jam_mulai); ?> s/d <?php echo e($model->jam_selesai); ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Deskripsi
                        </td>
                    </tr>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo e($model->deskripsi); ?>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </tbody>
            </table>
            <hr>
            <p class="card-text" style="color: #007bff;">Rp. <?php echo e($model->harga); ?> / hari</p>
            <a href="<?php echo e(url('/pemesanan/'.$model->id)); ?>">
                <button type=" button" class="btn btn-primary">Pesan Sekarang</button>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\RPL\applications\aulaku\resources\views/home/detail.blade.php ENDPATH**/ ?>