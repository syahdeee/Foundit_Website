<?php

use App\Models\User;
use App\Models\Barang;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDataUserController;
use App\Http\Controllers\AdminBarangTemuController;
use App\Http\Controllers\AdminBarangHilangController;

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

Route::get('/History', function(){
    return view('History');
});


// Route::get('/userprofilepengunjung', function(){
//     return view('UserProfilePengunjung');
// });


Route::get('/', [LibraryController::class,'home']);

// Route::get('/', [LibraryController::class,'home']);
Route::get('/baranghilang', [BarangController::class,'index'])->middleware('auth');
Route::get('/barangtemu', [PostController::class, 'index_temu'])->middleware('auth');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/barangtemu', [PostController::class, 'index_temu'])->middleware('auth');


// Route::get('baranghilang/{slug}', function($slug){
//     return view('detailBarangHilang', [
//         "barang" => Barang::find($slug)
//     ]);
// });

Route::get('/baranghilang/{barang:slug}', [LibraryController::class, 'show_hilang'])->middleware('auth');
Route::get('/barangtemu/{barang:slug}', [LibraryController::class, 'show_temu'])->middleware('auth');

Route::resource('/Laporan', LaporanController::class)->middleware('auth');
Route::resource('/History', HistoryController::class)->middleware('auth');
Route::get('/History/create/{Barang:slug}', [HistoryController::class, 'create'])->middleware('auth');

Route::get('/Laporan/create/checkSlug', [LaporanController::class, 'checkSlug']);

Route::get('/profile', [ProfileController::class,'index'])->middleware('auth');
Route::get('/profile/{User:nim}', [ProfileController::class,'pengunjung'])->middleware('auth');
// Route::get('/profile/history/{user:nim}', [ProfileController::class,'show'])->middleware('auth');

//------------------------------------------- Admin------------------------------------------------------------


Route::get('/admin/datauser', [AdminDataUserController::class, 'index']);

Route::get('/admin/home', [AdminHomeController::class, 'index']);

Route::get('/admin/baranghilang',[AdminBarangHilangController::class, 'index'] );

Route::get('/admin/barangtemu', [AdminBarangTemuController::class, 'index']);

//route verifikasi
Route::post('/admin/verif/{user:id}', [AdminHomeController::class, 'verif']);
Route::post('/admin/tolak/{user:id}', [AdminHomeController::class, 'tolak']);

Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'auth']); 
Route::post('/admin/logout',[AdminLoginController::class,'logout']);

Route::get('/admin/barang-hilang/{barang:id}/edit', [AdminBarangHilangController::class, 'edit'])-> name('edit');
Route::delete('/admin/barang-hilang/{barang:id}', [AdminBarangHilangController::class, 'delete'])-> name('delete');
Route::delete('/admin/barang-temu/{barang:id}', [AdminBarangTemuController::class, 'delete'])-> name('delete');
Route::delete('/admin/datauser/{user:id}', [AdminDataUserController::class, 'delete'])-> name('delete');

//Verif barang 
Route::post('/admin/baranghilang/{barang:id}/terima', [AdminBarangHilangController::class, 'verif']);
Route::post('/admin/barangtemu/{barang:id}/terima', [AdminBarangTemuController::class, 'verif']);


//Tolak barang
Route::post('/admin/baranghilang/{barang:id}/tolak', [AdminBarangHilangController::class, 'tolak']);
Route::post('/admin/barangtemu/{barang:id}/tolak', [AdminBarangTemuController::class, 'tolak']);

//hapus barang
Route::delete('/admin/barangtemu/{barang:id}/hapus', [AdminBarangTemuController::class, 'delete']);
Route::delete('/admin/baranghilang/{barang:id}/hapus', [AdminBarangHilangController::class, 'delete']);

