<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->name('api.v1.')->group(function () {
    Route::get('category', [\App\Http\Controllers\API\V1\CategoryController::class, 'index']);
    Route::get('gallery', [\App\Http\Controllers\API\V1\GalleryController::class, 'index']);
    Route::get('service', [\App\Http\Controllers\API\V1\ServiceController::class, 'index']);
    Route::get('service/show', [\App\Http\Controllers\API\V1\ServiceController::class, 'show']);
    Route::get('news', [\App\Http\Controllers\API\V1\NewsController::class, 'index']);
    Route::get('news/show', [\App\Http\Controllers\API\V1\NewsController::class, 'show']);
    Route::post('contact/store', [\App\Http\Controllers\API\V1\ContactController::class, 'store']);
    Route::get('about', [\App\Http\Controllers\API\V1\AboutController::class, 'show']);
    Route::get('info', [\App\Http\Controllers\API\V1\InfoController::class, 'show']);
});
