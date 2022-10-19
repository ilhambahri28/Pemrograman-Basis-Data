<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <style>
         table, th, td {
            border: 1px solid black;
         }
      </style>
</head>
<body>
<form method = "post" action = "/add-buku" > 
  <?php echo csrf_field(); ?> 
   <p> 
      <label for = "nama">Nama: </label> 
      <input type = "text" id = "nama" name="nama"><br /> 
   
      <label for = "jenis">Jenis: </label> 
      <input type = "text" id = "jenis" name="jenis"><br /> 
    
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
<table>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Aksi</th>
  </tr>
  <?php $__currentLoopData = $tampilbuku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    <td><?php echo e($b->id); ?></td>
    <td><?php echo e($b->nama); ?></td>
    <td><?php echo e($b->jenis); ?></td>
    <td>
      <a href="ubah-buku/<?php echo e($b->id); ?>" >ubah</a>
      <a href="hapus-buku/<?php echo e($b->id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">hapus</a>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\UTS\resources\views/buku.blade.php ENDPATH**/ ?>