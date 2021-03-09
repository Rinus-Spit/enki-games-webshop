<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/search', [App\Http\Controllers\FilterViewController::class, 'index']);
Route::get('/search/show', [App\Http\Controllers\FilterViewController::class, 'show'])->name('testing');
Auth::routes();

Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('age_categories', App\Http\Controllers\AgeCategoryController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('properties', App\Http\Controllers\PropertyController::class);
Route::resource('toplists', App\Http\Controllers\ToplistController::class);
/*
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])
->name('products.index');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])
->name('products.store');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])
->name('products.create');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])
->name('products.show');
Route::get('/products/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])
->name('products.edit');
Route::put('/products/{product}', [App\Http\Controllers\ProductController::class, 'update'])
->name('products.update');
Route::delete('/products/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])
->name('products.destroy');
*/
