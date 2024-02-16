<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/order', OrderController::class)->middleware('auth');
Route::get('/client', [SupplierController::class, 'index'])->name('client.index')->middleware('auth');
Route::get('/client/create', [SupplierController::class, 'create'])->name('client.create')->middleware('auth');
Route::post('/client/store', [SupplierController::class, 'store'])->name('client.store')->middleware('auth');
Route::get('/client/{id}/edit', [SupplierController::class, 'edit'])->name('client.edit')->middleware('auth');
Route::patch('/client/{id}', [SupplierController::class, 'update'])->name('client.update')->middleware('auth');
Route::get('/product', [ProductController::class, 'index'])->name('product.index')->middleware('auth');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');

