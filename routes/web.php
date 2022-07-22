<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduksController;
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
    return view('index');
});
Route::get("/home", [ProduksController::class, "index"]);
Route::get("/tarik_produk", [ProduksController::class, "tarik_produk"]);
Route::get("/input_produk", [ProduksController::class, "input_produk"]);
Route::get("/avail_produk", [ProduksController::class, "avail_produk"]);
Route::post("/produk", [ProduksController::class, "storeProduk"]);
Route::get('/produk/{id}', [ProduksController::class, 'show']);
Route::post('/edit_produk/{id}', [ProduksController::class, 'update']);
Route::get("/delete/{id}", [ProduksController::class, "destroy"]);
