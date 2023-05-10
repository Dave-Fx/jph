<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/cache', function () {
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('config:cache');

    return 'cache realizado';
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/tour-360', function () {
    return view('tour-360');
})->name('tour-360');

Route::get('/gracias', function () {
    return view('gracias');
})->name('gracias');