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

Auth::routes([
    'register' => false
]);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('posts', \App\Http\Controllers\NewsController::class);
    Route::resource('abouts', \App\Http\Controllers\AboutController::class);
    Route::resource('contacts', \App\Http\Controllers\ContactController::class);
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('services', \App\Http\Controllers\ServiceController::class);
    Route::get('media/show/{id}', [\App\Http\Controllers\MediaController::class, 'show'])->name('media');
    Route::post('file-upload', [\App\Http\Controllers\MediaController::class, 'dropzoneFileUpload'])->name('dropzoneFileUpload');
    Route::post('media/delete/{id}', [\App\Http\Controllers\MediaController::class, 'destroy'])->name('media.destroy');
});
