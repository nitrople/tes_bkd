<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get("/masuk", [MainController::class, "login"])->name("main.login");
Route::get("/cek-login", [MainController::class, "cekLogin"])->name("main.cek-login");

Route::get("/regis", [MainController::class, "regis"])->name("main.regis");

Route::get("/", [MainController::class, "index"])->name("main.index");
Route::get("/pilih-organisasi", [MainController::class, "pilihOrganisasi"])->name("main.pilih-organisasi");

Route::get("/pegawai/{id}", [MainController::class, "pegawai"])->name("main.crud.pegawai");
Route::get("/profil-pegawai/{nip}", [MainController::class, "profilPegawai"])->name("main.crud.profilpegawai");


