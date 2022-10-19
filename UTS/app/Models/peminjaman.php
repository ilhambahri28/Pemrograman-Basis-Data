<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected$table = "peminjaman";

    public function buku()
    {
        return $this->hasOne(buku::class);
    }
}
