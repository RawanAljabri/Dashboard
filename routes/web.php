<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [Dashboard::class,'Index'])->name('index');
Route::get('/dashboard/products', [Dashboard::class,'GetProduct'])->name('products');
Route::post('/dashboard/createproducts', [Dashboard::class,'CreateProduct'])->name('createproducts');


/* Route::get('/dashboard', function () {
    return view('dashboard.index');
}) ->name('index');

Route::get('/dashboard/products', function () {
    return view('dashboard.products');
}) ->name('products');
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
