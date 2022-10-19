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
@if ($message = Session::get('success'))
   <p>{{ $message }}</p>
@endif
<form method = "post" action = "/update-buku/{{$post->id}}" > 
  
  @csrf 
   <p> 
      <label for = "nama">Nama: </label> 
      <input type = "text" id = "nama" name="nama" value="{{ $post->nama}}"><br /> 
   
      <label for = "jenis">Jenis: </label> 
      <input type = "text" id = "jenis" name="jenis" value="{{ $post->jenis }}"><br /> 
    
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
</body>
</html>