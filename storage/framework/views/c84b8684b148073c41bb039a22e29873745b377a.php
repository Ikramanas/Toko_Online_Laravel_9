
<?php $__env->startSection('admin_container'); ?>
    <div class="row-md-9">
    <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-success">tambah Kategori</a>
    </div>

    
    

    <div class="card-body">
        <div class="table-responsive pt-2 pr-5 mr-5">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no=1?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>
                            <?php echo e($no++); ?>

                        </td>
                        <td>
                            <?php echo e($w->name); ?>

                        </td>
                    </tr>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    

    
    
<?php echo $__env->make('layouts.admin.main_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\02-BELAJAR\02.LARAVEL\laravel_toko\resources\views/admin/kategori/index.blade.php ENDPATH**/ ?>