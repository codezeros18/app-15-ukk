<?php

namespace App\Exports;

use App\Models\peminjaman;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PeminjamanExport implements FromView
{
    public function view(): View
    {
        $peminjaman = peminjaman::with(['user', 'buku'])->latest()->get();

        return view('peminjaman.export', [
            'peminjaman' => $peminjaman
        ]);
    }
}
