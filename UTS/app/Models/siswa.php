<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";

    public function siswa(){
        return $this->hasMany(buku::class, 'peminjaman');
    }
}
