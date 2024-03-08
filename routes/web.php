<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[GuestController::class,'index'])->name('pages.landing');

Route::get('/login', function () {
    return view('pages\login');
});


Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
        Route::resource('akun',AkunController::class);
        Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:petugas'])->group(function () {
        Route::get('/petugas/dashboard',[PetugasController::class,'PetugasDashboard'])->name('petugas.dashboard');
});

Route::middleware(['auth','role:peminjam'])->group(function () {
    // Route::resource('peminjam',PeminjamController::class);
    Route::get('/peminjam/dashboard',[PeminjamController::class,'PeminjamDashboard'])->name('peminjam.dashboard');
    Route::get('/peminjam/buku',[PeminjamController::class,'index']);
    Route::get('/peminjam/cart',[PeminjamController::class,'cart']);
    Route::get('/peminjam/detail/{id}', [BukuController::class, 'detail']);
});


Route::middleware(['auth','role:admin,petugas'])->group(function () {
        Route::resource('buku',BukuController::class);
        Route::resource('peminjaman',PeminjamanController::class);
        Route::resource('pengembalian',PengembalianController::class);
        // Route::get('/peminjaman/export',[PeminjamanController::class,'export']);
        // Route::get('/peminjaman/export', [PeminjamanController::class, 'export']);
        Route::get('/export-peminjaman', [ExcelController::class, 'exportPeminjaman']);
        Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
        Route::get('/buku/detail/{id}', [BukuController::class, 'detail']);

        // Route::get('/buku/create',[BukuController::class,'create']);
});

Route::middleware(['auth','role:admin,petugas'])->group(function () {
        Route::resource('kategori',KategoriController::class);
});

Route::middleware(['auth','role:admin'])->group(function () {
        Route::resource('akun',AkunController::class);
        Route::get('/akun/edit/{id}', [AkunController::class, 'edit']);
});

// Route::get('/pages/landing', [GuestController::class, 'index']);

// Route::middleware(['auth','role:peminjam'])->group(function () {
//         Route::resource('peminjam',PeminjamController::class);
// });

// Route::middleware(['auth','role:admin'])->group(function () {
//         Route::resource('profile',ProfileController::class);
// });

// Route::middleware(['auth','role:admin'])->group(function () {
//     Route::resource('kategori',KategoriController::class);
// });

// Route::middleware(['auth','role:admin,petugas'])->group(function () {
//     Route::prefix('dashboard')->group(function(){
//         Route::resource('buku',BukuController::class);
//      });
// });



// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth','role:admin', 'verified'])->name('admin.dashboard');











// Route::middleware(['auth','role:petugas'])->group(function () {
//     Route::get('/petugas',[PetugasController::class,'PetugasDashboard'])->name('petugas.dashboard');
// });

// Route::middleware(['auth','role:peminjam'])->group(function () {
//     Route::get('peminjam',[PeminjamanController::class,'PeminjamDashboard'])->name('peminjam.dashboard');
// });




Route::get('/register', function () {
    return view('pages\register');
});

//Buku
// Route::get('/buku/dashboard', function () {
//     return view('buku\dashboard');
// });

// Route::get('/buku/create', function () {
//     return view('buku\create');
// });



//Profile
// Route::get('/profile/dashboard', function () {
//     return view('profile\dashboard');
// });

// Route::get('/profile/akun', function () {
//     return view('profile\akun');
// });

// Route::get('/profile/create', function () {
//     return view('profile\create');
// });

// Route::get('/profile/akun', function () {
//     return view('profile\akun');
// });

// //Dashboard Setiap Role
// Route::get('/admin/dashboard', function () {
//     return view('admin\dashboard');
// });

// Route::get('/petugas/dashboard', function () {
//     return view('petugas\dashboard');
// });

// Route::get('/peminjam/dashboard', function () {
//     return view('peminjam\dashboard');
// });









require __DIR__.'/auth.php';

