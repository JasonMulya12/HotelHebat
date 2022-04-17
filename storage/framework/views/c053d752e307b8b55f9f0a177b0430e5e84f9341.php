
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('tipekamar.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
    <br>  
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
        
    <form action="<?php echo e(route('tipekamar.update', $tipekamar->id)); ?>" method="POST" enctype="multipart/form-data"> 
        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar" value="<?php echo e($tipekamar->tipe_kamar); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar:</strong>
                    <input type="text" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" value="<?php echo e($tipekamar->jumlah_kamar); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HotelHebat\resources\views/tipekamar/edit.blade.php ENDPATH**/ ?>