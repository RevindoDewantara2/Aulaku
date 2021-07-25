

<?php $__env->startSection('container'); ?>
<div class="container" style="margin-top: 20px;">
    <?php if(Auth::check()): ?>
    <h5>Pemesanan Aula</h5>
    <h6 style="color: grey;">Pastikan Data Yang Terisi Sudah Benar</h6>
    <div class="card">
        <div class="card-body">
            <form method="GET" action="<?php echo e(url('pemesanan/')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <fieldset disabled>
                        <label for="exampleInputEmail1">Nama Pesanan</label>
                        <input name="nama_pesanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama pesanan" value="<?php echo e($model->name); ?>_<?php echo e($hall->id); ?>_<?php echo e(substr($hall->nama_tempat,0,3)); ?>">
                    </fieldset>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <fieldset disabled>
                                <label for="disabledTextInput">Nama Pemesan</label>
                                <input name="nama_pemesan" type="text" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo e($model->name); ?>">
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <fieldset disabled>
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo e($model->email); ?>">
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset disabled>
                        <label for="exampleInputEmail1">Nomor Handphone</label>
                        <input name="nohandphone" type="text" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="<?php echo e($model->nohandphone); ?>">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <h5>Rincian Harga</h5>
    <h6 style="color: grey;">Berikut Rincian Harga Sewa</h6>
    <form method="POST" action="<?php echo e(url('pemesanan/')); ?>">
        <?php echo csrf_field(); ?>
        <input name="nama_pesanan" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama pesanan" value="<?php echo e($model->name); ?>_<?php echo e($hall->id); ?>_<?php echo e(substr($hall->nama_tempat,0,3)); ?>">
        <input name="nama_hall" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo e($hall->nama_tempat); ?>">
        <input name="nama_pemesan" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo e($model->name); ?>">
        <input name="email" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo e($model->email); ?>">
        <input name="nohandphone" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="<?php echo e($model->nohandphone); ?>">
        <input name="totalharga" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="Rp.<?php echo e($hall->harga); ?>">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p>
                            Total Harga
                        </p>
                    </div>
                    <div class="col-6">
                        <p style="text-align: end;">Rp.<?php echo e($hall->harga); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p>
                            <?php echo e($hall->nama_tempat); ?>

                        </p>
                    </div>
                    <div class="col-6">
                        <p style="text-align: end;">Rp.<?php echo e($hall->harga); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-end flex-column bd-highlight mb-3">
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Pesan</button>
        </div>
    </form>

    <?php else: ?>
    <?= redirect()->intended('/login'); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\RPL\applications\aulaku\resources\views/home/pemesanan.blade.php ENDPATH**/ ?>