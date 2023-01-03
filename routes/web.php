<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\jenisController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\reservasiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.index');
// });
Route::get('/', [userController::class, 'index'])->name('index');
Route::get('/menu', [userController::class, 'menu'])->name('menu');
Route::get('/gallery', [userController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/reservation', [reservasiController::class, 'indexClient'])->name('reservasi');
Route::post('/reservation/store', [reservasiController::class, 'store'])->name('reserv.store');

Route::post('/kontak/store', [KontakController::class, 'store'])->name('kontak.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin');

    Route::get('/admin-jenis', [jenisController::class, 'index'])->name('index.jenis');
    Route::post('/admin-jenis/store', [jenisController::class, 'store'])->name('store.jenis');
    Route::get('/admin-jenis/{id}', [jenisController::class, 'edit'])->name('edit.jenis');
    Route::post('/admin-jenis/delete/{id}', [jenisController::class, 'destroy'])->name('delete.jenis');
    Route::post('/admin-jenis/update{id}', [jenisController::class, 'update'])->name('update.jenis');

    Route::get('/admin-menu', [menuController::class, 'index'])->name('index.menu');
    Route::post('/admin-menu/store', [menuController::class, 'store'])->name('store.menu');
    Route::post('/admin-menu/delete{id}', [menuController::class, 'destroy'])->name('delete.menu');
    Route::get('/admin-menu/{id}', [menuController::class, 'edit'])->name('edit.menu');
    Route::post('/admin-menu/update{id}', [menuController::class, 'update'])->name('update.menu');

    Route::get('/admin-booklet', [menuController::class, 'indexBooklet'])->name('index.booklet');
    Route::post('/admin-booklet/store', [menuController::class, 'storeBooklet'])->name('store.booklet');
    Route::post('/admin-booklet/delete{id}', [menuController::class, 'destroyBooklet'])->name('delete.booklet');

    Route::get('/admin-gallery', [galleryController::class, 'index'])->name('index.gallery');
    Route::post('/admin-gallery/store', [galleryController::class, 'store'])->name('store.gallery');
    Route::post('/admin-gallery/{id}', [galleryController::class, 'destroy'])->name('delete.gallery');
    Route::post('/admin-gallery/update{id}', [galleryController::class, 'update'])->name('update.gallery');

    Route::get('/admin-reservasi', [reservasiController::class, 'index'])->name('index.reserv');
    Route::get('/admin-reservasi/detail{id}', [reservasiController::class, 'indexDetail'])->name('indexDetail.reserv');
    Route::DELETE('/admin-reservasi/delete{id}', [reservasiController::class, 'destroy'])->name('destroy.reserv');

    Route::GET('/banner', [BannerController::class, 'list'])->name('banner.list');
    Route::POST('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::GET('/banner/edit/{id?}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::POST('/banner/update/{id?}', [BannerController::class, 'update'])->name('banner.update');
    Route::DELETE('/banner/delete/{id?}', [BannerController::class, 'destroy'])->name('banner.destroy');

    /** About Us ............................................................................................. */
    Route::GET('/about/list', [AboutController::class, 'list'])->name('about.list');
    Route::POST('/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::GET('/about/edit/{id?}', [AboutController::class, 'edit'])->name('about.edit');
    Route::POST('/about/update/{id?}', [AboutController::class, 'update'])->name('about.update');


    Route::get('/admin-kontak', [KontakController::class, 'list'])->name('kontak.list');
    Route::GET('/kontak-detail/{id?}', [KontakController::class, 'detail'])->name('kontak.detail');
    Route::DELETE('/admin-kontak/delete/{id?}', [KontakController::class, 'destroy'])->name('kontak.destroy');
});

require __DIR__ . '/auth.php';
