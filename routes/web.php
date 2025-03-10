<?php

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
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/gis', [App\Http\Controllers\HomeController::class, 'index'])->name('map');
    Route::get('/world', [App\Http\Controllers\HomeController::class, 'indexWorld'])->name('indexWorld');
    Route::get('/geojson', [App\Http\Controllers\HomeController::class, 'indexGeoJson'])->name('indexGeoJson');
    Route::get('/layout', [App\Http\Controllers\HomeController::class, 'indexLayout'])->name('indexLayout');
})->name('home');

Auth::routes(['verify' => true]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'verified');
