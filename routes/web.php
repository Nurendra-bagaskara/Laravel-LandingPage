<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/Timber', function () {
    return view('Timber');
});
Route::get('/Natural_Stone', function () {
    return view('NaturalStone');
});
Route::get('/Commodity', function () {
    return view('Commodity');
});

Route::post('/store', [ContactController::class, 'store'])->name('store');
Route::put('/contact/{id}', [ContactController::class, 'update']);
Route::delete('/contact/{id}', [ContactController::class, 'delete']);

// Route::post('/store', [
//     'as'   => 'store',
//     'store' => 'ContactController',
// ]);