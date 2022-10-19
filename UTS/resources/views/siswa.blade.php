<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <style>
         table, th, td {
            border: 1px solid black;
         }
      </style>
</head>
<body>
<form method = "post" action = "/add-siswa" enctype="multipart/form-data">  
@csrf 
   <p> 
      <label for = "nama">Nama: </label> 
      <input type = "text" id = "nama" name="nama"><br /> 
   
      <label for = "kelas">Kelas: </label> 
      <input type = "text" id = "kelas" name="kelas"><br /> 
   
      <label for = "foto">Foto: </label> 
      <input type = "file" id = "foto" name="foto"><br> 
      <input type = "submit" value = "send"> <input type = "reset"> 
   </p> 
</form>
<table>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Foto</th>
    <th>Aksi</th>
  </tr>
  @foreach($tampilsiswa as $s) 
  <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->nama}}</td>
    <td>{{$s->kelas}}</td>
    <td><img src="{{asset('storage/' . $s->foto)}}" alt="" width="50"></td>
    <td>
      <a href="ubah-siswa/{{$s->id}}" class="btn btn-warning btn-sm">ubah</a>
      <a href="hapus-siswa/{{$s->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" >hapus</a>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>