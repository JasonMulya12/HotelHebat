
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Fasilitas Hotel</h2>
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
            <th>Fasilitas</th>
            <th>Keterangan </th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $fasilitashotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitashotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($fasilitashotel->nama_fasilitas); ?></td>
            <td><?php echo e($fasilitashotel->ket); ?></td>
            <td>
                <form action="<?php echo e(route('fasilitashotel.destroy', $fasilitashotel->id)); ?>" method="POST">
           
                    <a class="btn btn-primary" href="<?php echo e(route('fasilitashotel.edit', $fasilitashotel->id)); ?>">Edit</a>
     
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $fasilitashotels->links(); ?>

    <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('fasilitashotel.create')); ?>"> +</a>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/fasilitashotel/index.blade.php ENDPATH**/ ?>