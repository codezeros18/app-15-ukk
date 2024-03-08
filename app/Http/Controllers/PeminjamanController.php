<?php

namespace App\Http\Controllers;

use App\Exports\PeminjamanExport;
use Carbon\Carbon;
use App\Models\buku;
use App\Models\User;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = peminjaman::with(['user','buku'])->get();
        return view('peminjaman.dashboard',['peminjaman' => $peminjaman])->with([
            'title' => 'Peminjaman | Dashboard',
        ]);
    }

    // public function export(){
    //     return Excel::download(new PeminjamanExport, 'peminjaman.xlsx');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::where('role', '=', 'peminjam')->get();
        $buku = Buku::all();
        return view('peminjaman.create',['user' => $user,'buku' => $buku])->with([
            'title' => 'Peminjaman | Tambah',
            // 'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['tgl_peminjaman'] = Carbon::now()->toDateString();
        $request['tgl_pengembalian'] = Carbon::now()->addDay(3)->toDateString();

        $buku = buku::findOrFail($request->id_buku);

        if($buku['stok'] == 0){
            Session::flash('message','Cannot Rent Book Is Rented Out');
            Session::flash('alert-class','alert-danger');
            return redirect()->route('peminjaman.create');

        }else{
            $count = peminjaman::where('id_user', $request->id_user)->where('actual_tgl_pengembalian',null)
            ->count();

            if($count >= 3){
                Session::flash('message','Cannot Rent User Has Reached Limit');
                Session::flash('alert-class','alert-danger');
                return redirect()->route('peminjaman.create');
            }else{
                if($request->jumlah_pinjam > $buku->stok){
                    Session::flash('message','Cannot Rent Book U Want To Borrow Is Too Much For The Stock');
                    Session::flash('alert-class','alert-danger');
                    return redirect()->route('peminjaman.create');
                }
                else{
                    try {
                        DB::beginTransaction();
                        peminjaman::create($request->all());
                        $buku->stok -= $request->jumlah_pinjam;
                        $buku->save();
                        DB::commit();

                        Session::flash('message', 'Book successfully rented');
                        Session::flash('alert-class', 'alert-success');
                        return redirect()->route('peminjaman.create');
                    } catch (\Exception $e) {
                        // Rollback jika terjadi kesalahan
                        DB::rollBack();
                    }
                }
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        peminjaman::destroy($id);
        return redirect()->route('peminjaman.index');
    }
}
