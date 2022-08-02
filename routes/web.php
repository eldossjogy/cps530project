<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/credits', function () {
    return view('credits');
});

Route::get('/install', function () {
    return view('installation');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/demo', [RegisterController::class, 'index'])->name('demo');
Route::post('/demo', [RegisterController::class, 'store']);
