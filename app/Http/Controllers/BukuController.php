<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = buku::with('kategori')
            ->latest()
            ->paginate(5);
        return view('buku.dashboard')->with([
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::orderBy('kategori')
            ->get();
        return view('buku.create')->with([
            'kategori' => $kategori
        ]);
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
        return redirect()->route('buku.index');
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
    public function edit(string $id):View
    {
        // $buku = buku::with('kategori')
        //     ->latest()
        //     ->paginate(5);
        // return view('buku.dashboard')->with([
        //     'buku' => $buku
        // ]);
        // $kategori = kategori::orderBy('kategori')
        //     ->get();
        // return view('buku.edit')->with([
        //     'kategori' => $kategori
        // ]);
        // dd("est");
        // dd("test");
        $buku = buku::with('kategori');
        $buku = buku::findOrFail($id);
        return view('buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        dd($request);
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

        $buku = buku::findOrFail($id);
        if($request->hasFile('gambar')){

            $image = $request ->file('gambar');
            $namaGambar= $request -> judul . '.' . $image ->extension();

            $image-> delete(public_path('img/buku'), $namaGambar);
            $buku['gambar'] =$namaGambar;

        }
        $buku->update([
            'gambar' => $image->hashName(),
            'judul' => $request -> judul ,
            'penulis' => $request -> penulis,
            'penerbit' => $request -> penerbit,
            'tahun_terbit' => $request -> tahun_terbit,
            'sinopsis' => $request -> sinopsis,
            'stok' => $request -> stok,
            'id_kategori' => $request -> id_kategori,
        ]);
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        buku::destroy($id);
        return redirect()->route('buku.index');
    }
}
