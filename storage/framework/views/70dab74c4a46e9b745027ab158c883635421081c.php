
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Fasilitas Kamar</h2>
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
            <th>Tipe Kamar</th>
            <th>Nama Fasilitas </th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $fasilitaskamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitaskamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($fasilitaskamar->tipe_kamar); ?></td>
            <td><?php echo e($fasilitaskamar->fasilitas_kamar); ?></td>
            <td>
                <form action="<?php echo e(route('fasilitaskamar.destroy', $fasilitaskamar->id)); ?>" method="POST">
           
                    <a class="btn btn-primary" href="<?php echo e(route('fasilitaskamar.edit', $fasilitaskamar->id)); ?>">Edit</a>
     
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('fasilitaskamar.create')); ?>"> +</a>
            </div>
            <?php echo $fasilitaskamars->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/fasilitaskamar/index.blade.php ENDPATH**/ ?>