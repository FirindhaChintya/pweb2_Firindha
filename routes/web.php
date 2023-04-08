<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;

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

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::post('halamanlogin',[LoginController::class, 'halamanlogin'])->name('halamanlogin');
Route::post('home',[LoginController::class, 'index'])->name('index');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/penyewa',[TabelController::class, 'index'])->name('penyewa');

Route::get('form', function (){
    return view ('formbasic');
});

Route::get('/datasewa', [DataController::class, 'index'])->name('sewa');

Route::get('halamanlogin', function (){
    return view ('login');
})->name('home');

// Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::post('/simpansewa', [DataController::class, 'simpan'])->name('simpan');
