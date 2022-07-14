
<?php $__env->startSection('admin_container'); ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Dibuat</th>
                                            <th>Diperbaharui</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Dibuat</th>
                                            <th>Diperbaharui</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <tr>
                                            
                                            <td><?php echo e($w->name); ?></td>
                                            <td><?php echo e($w->email); ?></td>
                                            <td><?php echo e($w->roles); ?></td>
                                            <td><?php echo e($w->created_at); ?></td>
                                            <td><?php echo e($w->updated_at); ?></td>
                                            <td>
                                                <a href="user.edit" ><i class="fa-solid fa-pen-to-square "></i></a>
                                                
                                                <form action="<?php echo e(route('user.delete',$w->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    
                                                    <input type="submit" value="" class="far fa-trash-alt">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\02-BELAJAR\02.LARAVEL\laravel_toko\resources\views/admin/dataPengguna/index.blade.php ENDPATH**/ ?>