<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\productController;
use App\Http\Controllers\AuthController;

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

Route::get("/",[productController::class,"index"])->name('index');

Route::post("/tambahProduk/Simpan",[productController::class,"store"]);

Route::post("/ubahProduk/Simpan/{id}",[productController::class,"update"]);

Route::get("/hapus-product/{id}",[productController::class,"destroy"]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post("/daftar/Simpan",[AuthController::class,"daftar"]);


Route::post("/login/Simpan",[AuthController::class,"login"]);



Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/book', [AuthController::class, 'indexBooks'])->name('book');

});