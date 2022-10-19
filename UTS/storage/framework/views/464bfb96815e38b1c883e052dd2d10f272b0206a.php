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
<?php if($message = Session::get('success')): ?>
   <p><?php echo e($message); ?></p>
<?php endif; ?>
<form method = "post" action = "/update-buku/<?php echo e($post->id); ?>" > 
  
  <?php echo csrf_field(); ?> 
   <p> 
      <label for = "nama">Nama: </label> 
      <input type = "text" id = "nama" name="nama" value="<?php echo e($post->nama); ?>"><br /> 
   
      <label for = "jenis">Jenis: </label> 
      <input type = "text" id = "jenis" name="jenis" value="<?php echo e($post->jenis); ?>"><br /> 
    
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\UTS\resources\views/editbuku.blade.php ENDPATH**/ ?>