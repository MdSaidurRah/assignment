<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ProductController::class, 'products'])->name('productlist');
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::post('/store-product', [ProductController::class, 'storeProduct']);
Route::get('/show-product/{id}', [ProductController::class, 'showProduct']);
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('/update-product', [ProductController::class, 'updateProduct']);
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct']);


