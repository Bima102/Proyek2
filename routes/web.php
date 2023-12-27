<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\dashboardController;
use \App\Http\Controllers\adminController;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\riwayatController;
use App\Models\artikel;
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

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('user.login');
});

Route::get('/akunsuplier', function () {
    return view('suplier/akunsuplier');
});



Route::get('/loginsuplier', function () {
    return view('suplier/loginsuplier');
});

Route::get('/registersuplier', function () {
    return view('suplier/registersuplier');
});


Route::get('/dasboardsuplier', [adminController::class, 'index'])->name('dasboardsuplier');
Route::post('/dasboardsuplier/update/{id}', [adminController::class, 'updateStatus'])->name('dasboardsuplier-update-status');
Route::post('/dasboardsuplier/delete-payment/{id}', [adminController::class, 'deletePayment'])->name('dasboardsuplier-delete-payment');
Route::post('/dasboardsuplier/create-payment', [adminController::class, 'createPayment'])->name('dasboardsuplier-create-payment');


Route::get('/lupa-passwordsuplier', function () {
    return view('suplier/lupa-passwordsuplier');
});

Route::get('/riwayat-pengirimansuplier', function () {
    return view('suplier/riwayat-pengirimansuplier
    ');
});

Route::get('/kirim-telur', function () {
    return view('suplier/kirim-telur
    ');
});

Route::get('/informasi-akunsuplier', function () {
    return view('suplier/informasi-akunsuplier');
});

Route::get('/loginadmin', function () {
    return view('admin/loginadmin');
});


Route::get('/dashboardadmin', [dashboardController::class, 'index'])->name('dashboardadmin');
Route::post('/dashboardadmin/update/{id}', [dashboardController::class, 'updateStatus'])->name('update-status');
Route::post('/delete-payment/{id}', [dashboardController::class, 'deletePayment'])->name('delete-payment');
Route::post('/create-payment', [dashboardController::class, 'createPayment'])->name('create-payment');

Route::get('/edit-harga', function () {
    return view('admin/edit-harga');
});

Route::get('/akun', function () {
    return view('admin/akun');
});

Route::get('/edit-status', function () {
    return view('admin/edit-status');
});

Route::get('/riwayat-pesanan', function () {
    return view('admin/riwayat-pesanan');
});

Route::get('/pesan-ke-suplier', function () {
    return view('admin/pesan-ke-suplier');
});

Route::get('/update-penggantian-harga', function () {
    return view('admin/update-penggantian-harga');
});

Route::get('/tampilan-sebelumlogin', function () {
    return view('user/tampilan-sebelumlogin');
});

Route::get('/informasi-akunuser', function () {
    return view('user/informasi-akunuser');
});

Route::get('/register', function () {
    return view('user/register');
});
Route::get('/regis', function () {
    return view('user/regis');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/tampilan-setelah-login', function () {
    return view('user/tampilan-setelah-login');
});

Route::get('/lupa-passworduser', function () {
    return view('user/lupa-passworduser');
});

Route::get('/dasboarduser', function () {
    return view('user/dasboarduser');
});

Route::get('/bayar-request', function () {
    return view('user/bayar-request');
});

Route::get('/keranjang', function () {
    return view('user/keranjang');
});

Route::get('/riwayat-pembelian', function () {
    return view('user/riwayat-pembelian');
});



Route::get('/riwayat-pembelian', [Controller::class, 'riwayat']);
Route::get('/riwayat-barang-masuk', [Controller::class, 'barangmasuk']);
Route::get('/riwayat-pengirimansuplier', [Controller::class, 'pengiriman']);


Route::get('/artikel', function () {

    return view('artikel', [
        "title" => "artikel",
        "artikel" => artikel ::all()
    ]);
});

Route::get('/pesan-ke-suplier', function () {
    return view('admin/pesan-ke-suplier');
});
Route::get('/riwayharga', function () {
    return view('admin/riwayharga');
});

Route::get('/riwayharga', [riwayatController::class, 'updateharga'])->name('riwayharga');
Route::post('/riwayharga/delete-payment/{id}', [riwayatController::class, 'deletePayment'])->name('riwayharga-delete-payment');
Route::post('/riwayharga/create-payment', [riwayatController::class, 'createPayment'])->name('riwayharga-create-payment');

Auth::routes();

Route::get('/home', function () {
    return redirect('/dasboarduser');})->name('home'); 

