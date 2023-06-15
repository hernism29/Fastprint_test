<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dataproduk extends Model
{
    use HasFactory;
    protected $table = 'dataproduk';
    protected $fillable = ['nama_produk', 'harga','kategori','status'];
}
?>
