<?php

// Route::group(['prefix' => 'staro'], function () {

	Route::get('/', "MainController@index")->name('home');

	Route::get('putovanje', function () {
        return view('search');
	});
	Route::get('search', function () {
	    return view('search');
	});

	Route::get('smestaj', function () {
        return view('search');
	});

	Route::get('smestaj/{drzava}/{grad}/{smestaj}','SmestajController@singleSmestaj');
	Route::get('putovanje/{putovanje}','PutovanjeController@singlePutovanje');
    Route::get('o-nama',function (){
        return view('info');
    });
    Route::get('kontakt',function (){
       return view('kontakt');
    });




    Route::get('test', function () {
            return '';
    });


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
 	Route::get('blog', 'BlogFrontController@index');
 	Route::get('articles/order', 'BlogController@indexOrder')->name('articles.order');
 	Route::resource('articles', 'BlogController', ['except' => 'show']);
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

Route::group(['middleware' => 'auth'], function () {

    Route::get('app', function () {
        return redirect('app/smestaj');
    });

    Route::get('app/smestaj', 'SmestajController@showAll');

    Route::get('app/file-manager',function (){
        return view('admin.smestaj.galerija');
    });

    Route::get('app/kreiraj/smestaj', function () {
        return view('admin.smestaj.add-smestaj');
    });

    Route::get('app/edit/smestaj/{smestaj}','SmestajController@edit');


    Route::get('app/putovanje', 'PutovanjeController@showAll');

    Route::get('app/kreiraj/putovanje','PutovanjeController@index');

    Route::get('app/kreiraj/putovanje/{putovanje}','PutovanjeController@indexKreiraj');

    Route::get('app/edit/putovanje/{putovanje}','PutovanjeController@edit');


    Route::get('app/edit/smestaj/{smestaj}/galerija','SmestajController@editGalerija');

    Route::post('app/store/smestaj','SmestajController@store');

    Route::post('app/store/smestaj/dva','PutovanjeController@storeDva');

    Route::post('app/edit/smestaj/{smestaj}','SmestajController@update');

    Route::get('app/delete/smestaj/{smestaj}','SmestajController@destroy');

    Route::get('app/delete/putovanje/{putovanje}','PutovanjeController@destroy');

    Route::post('app/store/smestaj/slajder','SmestajController@setSlajder');

    Route::post('app/store/putovanje/slajder/glavni','PutovanjeController@setSlajderGlavni');
    Route::post('app/store/putovanje/slajder/sporedni','PutovanjeController@setSlajderSporedni');

    Route::post('app/store/putovanje','PutovanjeController@store');

});


