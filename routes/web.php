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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/age-form', function () {
    return view('age-form');
});

Route::post('/dashboard', function (Illuminate\Http\Request $request) {
    return view('dashboard');
})->middleware(\App\Http\Middleware\CheckAgeMiddleware::class);

