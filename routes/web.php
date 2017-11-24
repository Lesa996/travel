<?php

// Route::group(['prefix' => 'staro'], function () {

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

	Route::get('app/kreiraj/putovanje','PutovanjeController@index');
	Route::get('app/edit/putovanje/{putovanje}','PutovanjeController@edit');



	///////////FUNCKIONALNOSI////////
    Route::get('app/edit/smestaj/{smestaj}/galerija','SmestajController@editGalerija');
	Route::post('app/store/smestaj','SmestajController@store');
	Route::post('app/edit/smestaj/{smestaj}','SmestajController@update');
	Route::get('app/delete/smestaj/{smestaj}','SmestajController@destroy');

	Route::get('app/delete/putovanje/{putovanje}','PutovanjeController@destroy');

	Route::post('app/store/smestaj/slajder','SmestajController@setSlajder');

	Route::post('app/store/smestaj/slajder','SmestajController@setSlajder');
	Route::get('test', function () {
	    return '';
	});

//
     // Home
 	Route::get('/', 'HomeController')->name('home');

 	// Language
 	Route::get('language/{lang}', 'LanguageController')
 	    ->where('lang', implode('|', config('app.languages')));

 	// Admin
 	Route::get('web-admin', 'AdminController')->name('admin');

 	// Medias
 	Route::get('medias', 'FilemanagerController')->name('medias');

 	// Blog
 	Route::get('blog/tag', 'BlogFrontController@tag');
 	Route::get('blog/search', 'BlogFrontController@search');
 	Route::get('articles', 'BlogFrontController@index');
 	Route::get('blog/order', 'BlogController@indexOrder')->name('blog.order');
 	Route::resource('blog', 'BlogController', ['except' => 'show']);
 	Route::put('postseen/{id}', 'BlogAjaxController@updateSeen');
 	Route::put('postactive/{id}', 'BlogAjaxController@updateActive');
 	Route::get('blog/{blog}', 'BlogFrontController@show')->name('blog.show');

 	// Comment
 	Route::resource('comment', 'CommentController', [
 	    'except' => ['create', 'show', 'update']
 	]);
 	Route::put('comment/{comment}', 'CommentAjaxController@update')->name('comment.update');
 	Route::put('commentseen/{id}', 'CommentAjaxController@updateSeen');

 	// Contact
 	Route::resource('contact', 'ContactController', ['except' => ['show', 'edit']]);

 	// Roles
 	Route::get('roles', 'RoleController@edit');
 	Route::post('roles', 'RoleController@update');

 	// Users
 	Route::get('user/sort/{role?}', 'UserController@index');
 	Route::get('user/blog-report', 'UserController@blogReport')->name('user.blog.report');
 	Route::resource('user', 'UserController', ['except' => 'index']);
 	Route::put('uservalid/{id}', 'UserAjaxController@valid');
 	Route::put('userseen/{user}', 'UserAjaxController@updateSeen');

 	// Authentication
 	Auth::routes();

 	// Email confirmation
 	Route::get('resend', 'Auth\RegisterController@resend');
 	Route::get('confirm/{token}', 'Auth\RegisterController@confirm');

 	// Notifications
 	Route::get('notifications/{user}', 'NotificationController@index');
 	Route::put('notifications/{notification}', 'NotificationController@update');


