<?php

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

Route::get('/', function () {
    return view('home');
});

// // Pemasukan
// Route::group(['middleware' => ['permission:manajemen pemasukan']], function() {
//     Route::get('/pemasukan/search','PemasukanController@search')->name('pemasukan.search');
//     Route::get('/pemasukan/pdf','PemasukanController@reportPdf')->name('pemasukan.pdf');
//     Route::get('/pemasukan/export/', 'PemasukanController@export')->name('pemasukan.export');
//     Route::post('/pemasukan/import/', 'PemasukanController@import')->name('pemasukan.import');
//     Route::resource('pemasukan', 'PemasukanController');        
// });

Route::resource('pemasukan', PemasukanController::class);
Route::get('/pemasukan', 'PemasukanController@index');
// Route::get('/pemasukan/export_excel', 'PemasukanController@export_excel');
Route::get('/pemasukan/export_excel', 'PemasukanController@export_excel')->name('pemasukan.export_excel');
Route::get('export_excel', [PemasukanController::class, 'export_excel'])->name('pemasukan');
Route::resource('blog', BlogController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
