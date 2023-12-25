<?php

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
//     return view('index');
// });

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KontrakControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'title' => 'Ini Dokumen'
    ]);
});

// Route::resource('kontrak', KontrakControllers::class);
Route::get('kontrak', 'KontrakControllers@create');
Route::get('kontrak_show', 'KontrakControllers@index')->name('kontrak_show');
Route::get('kontrak/{id}', 'KontrakControllers@show');
Route::post('kontrak', 'KontrakControllers@store');
Route::post('kontrak/{id}/destroy', 'KontrakControllers@destroy');

Route::get('jabatan', 'JabatanController@index')->name('jabtan');
Route::resource('jabatan', 'JabatanController');
