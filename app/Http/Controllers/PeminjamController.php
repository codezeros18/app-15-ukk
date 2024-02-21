<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use Illuminate\Http\Request;
use App\Models\buku;
use Illuminate\View\View;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function PeminjamDashboard()
    {
        return view('peminjam.dashboard')->with([
            'title' => 'Peminjam | Dashboard'
        ]);
    }

    public function index()
    {
        $buku = buku::with('kategori')
            ->latest()
            ->paginate(10);
        return view('peminjam.buku')->with([
            'buku' => $buku,
            'title' => 'Peminjam | Dashboard',
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
        return view('peminjam.detail',compact('peminjam'));
    }

    public function detail(string $id):View
    {
        $buku = buku::findOrFail($id);
        return view('peminjam.detail',compact('peminjam'));
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
