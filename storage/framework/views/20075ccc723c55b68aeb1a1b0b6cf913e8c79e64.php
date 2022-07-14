

<form action="<?php echo e(route('barang.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang">
<br>
    <label for="harga">Harga</label>
    <input type="text" name="harga">
<br>
    <label for="kategori">kategori</label>
    <select name="" id="">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<br>
    <input type="submit" value="Simpan">
</form>

<?php /**PATH F:\02-BELAJAR\02.LARAVEL\laravel_toko\resources\views/admin/barang/tambah.blade.php ENDPATH**/ ?>