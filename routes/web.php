<?php

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
Route::get('putovanje', function () {
    return view('putovanje');
});
Route::get('search', function () {
    return view('search');
});

Route::get('smestaj', function () {
    return view('smestaj');
});
Route::get('app', function () {
    return redirect('app/smestaj');
});
///////////SMESTAJ////////
Route::get('app/smestaj', function () {
    return view('admin.smestaj.lista-smestaja');
});

Route::get('app/kreiraj/smestaj', function () {
    return view('admin.smestaj.add-smestaj');
});
Route::get('app/edit/smestaj', function () {
    return view('admin.smestaj.edit-smestaj');
});
///////////PUTOVANJE////////

