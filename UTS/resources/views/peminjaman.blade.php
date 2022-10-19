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
@csrf  
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
  @foreach($tampilpeminjaman as $p) 
  <tr>
    <td>{{$p->id}}</td>
    <td>{{$p->siswa_id}}</td>
    <td>{{$p->buku_id}}</td>
    <td>{{$p->created_at}}</td>
    <td>
      <a href="/hapus-peminjaman/{{$p->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">hapus</i></a>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>