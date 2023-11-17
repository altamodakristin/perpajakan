<?php

use App\Http\Controllers\masterController;
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
    return view('welcome');
});

// Route::resource('master',masterController::class);
Route::get('/master', [masterController::class, 'create'])->name('create-master');
Route::get('/master', [masterController::class, 'index'])->name('index-master');
Route::get('/master/print', [masterController::class, 'print'])->name('print-master');

