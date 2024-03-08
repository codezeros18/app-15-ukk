<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PeminjamanExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function exportPeminjaman()
    {
        return Excel::download(new PeminjamanExport, 'Data_Peminjaman.xlsx');
    }
}
