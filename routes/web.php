<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
Route::get('/product',[productController::class,'index'])->name('product-index.php');
Route::get("/product/create",[productController::class ,'create'])->name('product.create');
Route::post("/product",[productController::class ,'store'])->name('product.store');
Route::get("/product/{product}/edit",[productController::class ,'edit'])->name('product.edit');
Route::put("/product/{product}",[productController::class ,'update'])->name('product.update');