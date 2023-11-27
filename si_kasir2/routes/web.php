<?php

use App\Http\Controllers\BarangController;
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
    return view('welcome');
});

// Route::get('/barang/list}',[
//     'as' => 'barang-list',
//     'uses' => 'BarangController@listBarang'
// ]);

Route::controller(BarangController::class)->name('barang.')->prefix('barang')->group(function () {
    Route::get('/list', 'listBarang')->name('list');
    Route::get('/list-diskon', 'listBarangDiskon')->name('list-diskon');
});

// Route::prefix('barang')->name('barang.')->group(function () {
//     Route::get('/list', [BarangController::class, 'listBarang'])->name('list');
// });