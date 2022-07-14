
<?php $__env->startSection('admin_container'); ?>
<a href="<?php echo e(route('barang.create')); ?>">Tambah Barang</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores provident rerum, ipsum distinctio placeat nulla voluptatum molestiae ducimus recusandae qui vel! Enim eum expedita soluta autem ex architecto velit id.</p>
<?php echo e(dd('$data')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\02-BELAJAR\02.LARAVEL\laravel_toko\resources\views/admin/barang/index.blade.php ENDPATH**/ ?>