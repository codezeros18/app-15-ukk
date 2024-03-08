<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'gambar',
        'sinopsis',
        'stok',
        'id_kategori'
    ];
    public function kategori(){
        return $this->belongsTo(kategori::class,'id_kategori');
    }

    public function peminjaman(){
        return $this->hasMany(peminjaman::class,'id_buku');
    }
}
