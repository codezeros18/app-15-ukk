<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buku.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'gambar' => 'required|image:jpeg,jpg,png',
            'sinopsis' => 'required',
            'stok' => 'required',
            'id_kategori' => 'required',
        ]);

        $image = $request ->file('gambar');
        $namaGambar= $request -> judul . '.' . $image ->extension();
        $image-> move(public_path('img/buku'), $namaGambar);
        $buku['gambar'] =$namaGambar;

        buku::create($buku);
        return redirect()->route('buku.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        //
    }
}
