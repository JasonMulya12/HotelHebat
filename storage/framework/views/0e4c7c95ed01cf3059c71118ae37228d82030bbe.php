
<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Pemesanan User</h2>
            </div>
        </div>
    </div>
    <br>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
     
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Pemesanan</th>
            <th>Email </th>
            <th>Nomor Hp </th>
            <th>Nama Tamu </th>
            <th>Tipe Kamar </th>
            <th>Tanggal Check In </th>
            <th>Tanggal Check Out </th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $pemesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($pemesanan->nama_pemesan); ?></td>
            <td><?php echo e($pemesanan->email); ?></td>
            <td><?php echo e($pemesanan->no_hp); ?></td>
            <td><?php echo e($pemesanan->nama_tamu); ?></td>
            <td><?php echo e($pemesanan->tipe_kamar); ?></td>
            <td><?php echo e($pemesanan->tgl_check_in); ?></td>
            <td><?php echo e($pemesanan->tgl_check_out); ?></td>
            <td>
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $pemesanans->links(); ?> 
    <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('pemesanan.create')); ?>"> +</a>
            </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/pemesanan/index.blade.php ENDPATH**/ ?>