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
@if ($message = Session::get('success'))
   <p>{{ $message }}</p>
@endif
<form method = "post" action = "/update-siswa/{{$post->id}}" enctype="multipart/form-data">  
@csrf 
   <p> 
      <label for = "nama">Nama: </label> 
      <input type = "text" id = "nama" name="nama" value="{{ $post->nama}}"><br /> 
   
      <label for = "kelas">Kelas: </label> 
      <input type = "text" id = "kelas" name="kelas" value="{{ $post->kelas}}"><br /> 
   
      <label for = "foto">Foto: </label> 
      <input type = "file" id = "foto" name="foto"><br> 
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
</body>
</html>