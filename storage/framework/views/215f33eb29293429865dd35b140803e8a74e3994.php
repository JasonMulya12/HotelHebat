
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kamar</h2>
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
            <th>Jumlah Kamar</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $tipekamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipekamarss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($tipekamarss->tipe_kamar); ?></td>
            <td><?php echo e($tipekamarss->jumlah_kamar); ?></td>
            <td>
                <form action="<?php echo e(route('tipekamar.destroy', $tipekamarss->id)); ?>" method="POST">
           
                    <a class="btn btn-primary" href="<?php echo e(route('tipekamar.edit', $tipekamarss->id)); ?>">Edit</a>
     
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $tipekamars->links(); ?>

    <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('tipekamar.create')); ?>"> +</a>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/tipekamar/index.blade.php ENDPATH**/ ?>