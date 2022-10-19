<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <style>
         table, th, td {
            border: 1px solid black;
         }
         .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
      </style>
</head>
<body>
<form method = "post" action = "/add-peminjaman"> 
<?php echo csrf_field(); ?>  
   <p> 
      <label for = "idsiswa">ID SISWA: </label> 
      <input type = "text" id = "idsiswa" name="idsiswa"><br /> 
   
      <label for = "idbuku">ID BUKU: </label> 
      <input type = "text" id = "idbuku" name="idbuku"><br /> 
    
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
<table boder="1">
  <tr>
    <th>ID</th>
    <th>ID Siswa</th>
    <th>ID Buku</th>
    <th>Waktu</th>
    <th>Aksi</th>
  </tr>
  <?php $__currentLoopData = $tampilpeminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <tr>
    <td><?php echo e($p->id); ?></td>
    <td><?php echo e($p->siswa_id); ?></td>
    <td><?php echo e($p->buku_id); ?></td>
    <td><?php echo e($p->created_at); ?></td>
    <td>
      <a href="/hapus-peminjaman/<?php echo e($p->id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">hapus</i></a>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\UTS\resources\views/peminjaman.blade.php ENDPATH**/ ?>