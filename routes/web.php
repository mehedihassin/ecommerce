<?php

use App\Http\Controllers\CategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Faker\Guesser\Name;
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

// categori crud route

Route::group(['prefix'], function () {
    Route::get('/admin', [CategoriController::class, 'admin'])->middleware('auth')->name('category_admin');
    Route::get('/index', [CategoriController::class, 'index'])->middleware('auth')->name('category_index');
    Route::get('/create', [CategoriController::class, 'create'])->middleware('auth')->name('category_create');
    Route::post('/store', [CategoriController::class, 'store'])->middleware('auth')->name('category_store');
    Route::get('/edit/{id}', [CategoriController::class, 'edit'])->middleware('auth')->name('category_edit');
    Route::post('/update/{id}', [CategoriController::class, 'update'])->middleware('auth')->name('category_update');
    Route::get('/delete/{id}', [CategoriController::class, 'delete'])->middleware('auth')->name('category_delete');
});
// product crud route

Route::group(['prefix'], function () {
    Route::get('/product-index', [ProductController::class, 'index'])->middleware('auth')->name('product_index');
    Route::get('/product-create', [ProductController::class, 'create'])->middleware('auth')->name('product_create');
});




require __DIR__ . '/auth.php';
