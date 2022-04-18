
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Reservasi Hotel</h2>
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

            <div class="row">
                <div class="col-md-4">
                    <form action="<?php echo e(url()->current()); ?>" autocomplete="off" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
        <tr>
            <th>No</th>
            <th>Nama Tamu</th>
            <th>Tanggal Check In </th>
            <th>Tanggal Check Out </th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $reservasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($pemesanan->nama_tamu); ?></td>
            <td><?php echo e($pemesanan->tgl_check_in); ?></td>
            <td><?php echo e($pemesanan->tgl_check_out); ?></td>
            <td>
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $reservasis->links(); ?>

    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.resepsionis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/reservasi/index.blade.php ENDPATH**/ ?>