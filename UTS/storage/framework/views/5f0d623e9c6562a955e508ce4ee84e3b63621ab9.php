<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <style>
      </style>
</head>
<body>
<?php if($message = Session::get('success')): ?>
   <p><?php echo e($message); ?></p>
<?php endif; ?>
<form method = "post" action = "/update-siswa/<?php echo e($post->id); ?>" enctype="multipart/form-data">  
<?php echo csrf_field(); ?> 
   <p> 
      <label for = "nama">Nama: </label> 
      <input type = "text" id = "nama" name="nama" value="<?php echo e($post->nama); ?>"><br /> 
   
      <label for = "kelas">Kelas: </label> 
      <input type = "text" id = "kelas" name="kelas" value="<?php echo e($post->kelas); ?>"><br /> 
   
      <label for = "foto">Foto: </label> 
      <input type = "file" id = "foto" name="foto"><br> 
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\UTS\resources\views/editsiswa.blade.php ENDPATH**/ ?>