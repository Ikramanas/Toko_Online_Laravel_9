<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Page</title>
</head>
<body>
  hai <?php echo e(Auth()->user()->name); ?>

  level kamu adalah <?php echo e(Auth()->user()->roles); ?>

</body>
</html><?php /**PATH F:\02-BELAJAR\02.LARAVEL\laravel_toko\resources\views/dashboard/index.blade.php ENDPATH**/ ?>