<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produk";
    public $timestamps = false;
    protected $fillable = [
        "id_produk",
        "nama_produk",
        "harga",
        "kategori",
        "status"
    ];
}
