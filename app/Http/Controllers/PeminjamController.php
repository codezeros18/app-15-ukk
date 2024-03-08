<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use Illuminate\Http\Request;
use App\Models\buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function PeminjamDashboard()
    {
        $buku = buku::with('kategori')
            ->latest()
            ->paginate(3);
        return view('peminjam.dashboard')->with([
            'title' => 'Peminjam | Dashboard',
            'buku' => $buku,
        ]);
    }

    public function index()
    {
        $buku = buku::with('kategori')
            ->latest()
            ->paginate(10);
        return view('peminjam.buku')->with([
            'buku' => $buku,
            'title' => 'Peminjam | Buku',
        ]);

    }

    public function cart()
    {
        $buku = buku::with('kategori')
            ->whereHas('peminjaman', function ($query) {
                $query->where('id_user', Auth::id())
                    ->where('actual_tgl_pengembalian', null);
            })
            ->latest()
            ->paginate(10);
        return view('peminjam.cart')->with([
            'title' => 'Peminjam | Cart',
            'buku' => $buku,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $buku = buku::findOrFail($id);
        return view('peminjam.detail',compact('buku'))->with([
            'title' => 'Peminjam | Detail Buku',
        ]);
    }

    public function detail(string $id):View
    {
        $buku = Buku::findOrFail($id);
        return view('peminjam.detail', compact('buku'))->with([
        'title' => 'Peminjam | Detail Buku',
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjam $peminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjam $peminjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjam $peminjam)
    {
        //
    }
}
