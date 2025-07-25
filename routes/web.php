<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;

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

//Route::get('/', function () {
// return view('dashboard');
//});

route::get('/', [DashboardController::class, 'index']);
//route::get('/mahasiswa', [MahasiswaController::class, 'index']);
//route::post('/mahasiswa', [MahasiswaController::class, 'store']);
//route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
route::resource('/mahasiswa', MahasiswaController::class);
route::resource('/prodi', ProdiController::class);
