
<?php $__env->startSection('admin_container'); ?>
<form action="<?php echo e(route('kategori.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="nama_kategori" placeholder="masukkan kategori baru">
    <input type="submit" value="Save">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\02-BELAJAR\02.LARAVEL\laravel_toko\resources\views/admin/kategori/tambah_kategori.blade.php ENDPATH**/ ?>