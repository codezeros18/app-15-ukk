<?php

namespace App\Models;

use App\Models\buku;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'id_user',
        'id_buku',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'actual_tgl_pengembalian',
        'jumlah_pinjam'
    ];

    /**
     * Get the user that owns the peminjaman
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    /**
     * Get the user that owns the peminjaman
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku(): BelongsTo
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id');
    }
}
