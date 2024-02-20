<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages\landing');
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
        Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:petugas'])->group(function () {
        Route::get('/petugas/dashboard',[PetugasController::class,'PetugasDashboard'])->name('petugas.dashboard');
});


Route::middleware(['auth','role:admin'])->group(function () {
        Route::resource('buku',BukuController::class);
        Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);

        // Route::get('/buku/create',[BukuController::class,'create']);
}); 

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


Route::get('/login', function () {
    return view('pages\login');
});

Route::get('/register', function () {
    return view('pages\register');
});

Route::get('/book', function () {
    return view('pages\book');
});

Route::get('/detail', function () {
    return view('pages\detail');
});

Route::get('/cart', function () {
    return view('pages\cart');
});

//Buku
// Route::get('/buku/dashboard', function () {
//     return view('buku\dashboard');
// });

// Route::get('/buku/create', function () {
//     return view('buku\create');
// });


Route::get('/buku/kategori', function () {
    return view('buku\kategori');
});


//Profile
Route::get('/profile/dashboard', function () {
    return view('profile\dashboard');
});

Route::get('/profile/akun', function () {
    return view('profile\akun');
});

Route::get('/profile/create', function () {
    return view('profile\create');
});

Route::get('/profile/akun', function () {
    return view('profile\akun');
});

//Dashboard Setiap Role
Route::get('/admin/dashboard', function () {
    return view('admin\dashboard');
});

Route::get('/petugas/dashboard', function () {
    return view('petugas\dashboard');
});

Route::get('/peminjam/dashboard', function () {
    return view('peminjam\dashboard');
});









require __DIR__.'/auth.php';

