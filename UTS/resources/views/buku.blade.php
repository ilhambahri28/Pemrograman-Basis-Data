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
  @csrf 
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
  @foreach($tampilbuku as $b) 
  <tr>
    <td>{{$b->id}}</td>
    <td>{{$b->nama}}</td>
    <td>{{$b->jenis}}</td>
    <td>
      <a href="ubah-buku/{{$b->id}}" >ubah</a>
      <a href="hapus-buku/{{$b->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">hapus</a>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>