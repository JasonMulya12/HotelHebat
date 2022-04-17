
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Resepsionis</h2>
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
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $resepsionis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resepsioni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($resepsioni->name); ?></td>
            <td><?php echo e($resepsioni->email); ?></td>
            <td><?php echo e($resepsioni->role); ?></td>
            <td><?php echo e($resepsioni->password); ?></td>
            <td>
                <form action="<?php echo e(route('resepsionis.destroy', $resepsioni->id)); ?>" method="POST">
           
                    <a class="btn btn-primary" href="<?php echo e(route('resepsionis.edit', $resepsioni->id)); ?>">Edit</a>
     
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $resepsionis->links(); ?>

    <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('resepsionis.create')); ?>"> +</a>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/resepsionis/index.blade.php ENDPATH**/ ?>