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
    return view('menu');
});

Route::get('/apartaments', function () {
    return view('welcome');
});
Route::get('/client', function () {
    return view('welcomeClients');
});
Route::get('/lloguer', function () {
    return view('welcomeLloguers');
});
Route::get('/usuari', function () {
    return view('welcomeUsuaris');
});

Route::resource('apartaments', ControladorApartaments::class);
Route::resource('clients', ControladorClients::class);
Route::resource('lloguers', ControladorLloguers::class);
Route::resource('usuaris', ControladorUsuaris::class);
