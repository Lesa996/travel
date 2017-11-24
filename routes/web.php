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
Route::get('smestaj/{drzava}/{grad}/{smestaj}','SmestajController@singleSmestaj');

///////////SMESTAJ////////
Route::get('app/smestaj', 'SmestajController@showAll');

Route::get('app/kreiraj/smestaj', function () {
    return view('admin.smestaj.add-smestaj');
});
Route::get('app/edit/smestaj/{smestaj}','SmestajController@edit');


///////////PUTOVANJE////////
Route::get('app/putovanje', 'PutovanjeController@showAll');

Route::get('app/kreiraj/putovanje', function () {
    return view('admin.putovanje.add-putovanje');
});
Route::get('app/edit/putovanje/{putovanje}','PutovanjeController@edit');



///////////FUNCKIONALNOSI////////

Route::post('app/store/smestaj','SmestajController@store');
Route::post('app/edit/smestaj/{smestaj}','SmestajController@update');
Route::get('app/delete/smestaj/{smestaj}','SmestajController@destroy');

Route::get('app/delete/putovanje/{putovanje}','PutovanjeController@destroy');

Route::post('app/store/smestaj/slajder','SmestajController@setSlajder');
Route::get('test', function () {
    var_dump(\App\Smestaj::find(1)->cover->url);
});



