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

Auth::routes();

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::post('posts', [App\Http\Controllers\PostController::class, 'store']);
Route::get('user-posts', [App\Http\Controllers\PostController::class, 'all']);
Route::post('import-posts', [App\Http\Controllers\ImportController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
