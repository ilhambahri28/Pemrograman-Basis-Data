<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
         .button-flat-outline {
    border: 1px solid #801515;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
    background: transparent;          /* set warna background menjadi transparan */
    color: #801515;                   /* ubah warna font */
    font-size: 16px;                  /* ubah ukuran font */
    padding: 0.5em 1em 0.5em 1em;     /* padding: top right bottom left; */
    }
    .button-flat-outline:hover {
        opacity: 0.8;                     /* ubah tingkat transparansi saat cursor menuju button. 0.0 s.d 1.0 */
    }
    .button-flat-outline:active {
        background: #550000;              /* ubah background saat button ditekan */
        color: #FFFFFF;                   /* set warna font menjadi putih */       
    }
      </style>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <button class="button-flat-outline"><a href="{{url('/siswa')}}">siswa</a></button>
        <button class="button-flat-outline"><a href="{{url('/buku')}}">buku</a></button>
        <button class="button-flat-outline"><a href="{{url('/peminjaman')}}">peminjaman</a></button>
    </x-slot>


    
</x-app-layout>
 
</body>
</html>


