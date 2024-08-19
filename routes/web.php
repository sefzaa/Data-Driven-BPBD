<?php

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
use App\Http\Controllers\DisasterController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('beranda');
});
Route::get('/', [HomeController::class, 'index'])->name('beranda');


Route::get('/disasters', [DisasterController::class, 'index'])->name('disasters.index');
Route::post('/disasters', [DisasterController::class, 'store'])->name('disasters.store');
// Route untuk menyimpan data bencana

Route::get('/disasters/{id}', [DisasterController::class, 'show'])->name('disasters.show');
Route::delete('/disasters/{id}', [DisasterController::class, 'destroy'])->name('disasters.destroy');
