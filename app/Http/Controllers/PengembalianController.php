<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\User;
use App\Models\peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role', '=', 'peminjam')->get();
        $buku = Buku::all();
        return view('pengembalian.dashboard',['user' => $user,'buku' => $buku])->with([
            'title' => 'Pengembalian | Dashboard',
            // 'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //user and buku yang dipilih untuk direturn benar, maka berhasil return book
        //user and buku yang dipilih untuk direturn salah, maka muncul error notice
        $peminjaman = peminjaman::where('id_user', $request->id_user)->where('id_buku',$request->id_buku)->where('actual_tgl_pengembalian', null);
        $peminjamanData = $peminjaman->first();
        $countData = $peminjaman->count();

        if($countData > 0){
            //return book
            $peminjamanData->actual_tgl_pengembalian = Carbon::now()->toDateString();
            $peminjamanData->save();

            $jumlahPinjam = $peminjamanData->jumlah_pinjam;

            $buku = Buku::findOrFail($request->id_buku);
            $buku->stok += $jumlahPinjam;
            $buku->save();

            Session::flash('message','The Book Is Returned');
            Session::flash('alert-class','alert-success');
            return redirect()->route('pengembalian.index');
        }else{
            Session::flash('message','Theres Error In Returning Book');
            Session::flash('alert-class','alert-danger');
            return redirect()->route('pengembalian.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
