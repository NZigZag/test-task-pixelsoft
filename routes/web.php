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

Route::group(['namespace' => 'Blog'], function () {
    Route::get('/', "PostController@home")->name('home');

    Route::group(['middleware' => 'auth', 'as' => 'post.'], function () {
        Route::post('/post', "PostController@store")->name('store');
    });
});

Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {
    Route::get('register', "RegisterController@showRegistrationForm")->name('registerForm');
    Route::post('register', "RegisterController@register")->name('register');

    Route::get('login', "LoginController@showLoginForm")->name('loginForm');
    Route::post('login', "LoginController@login")->name('login');

    Route::get('logout', "LoginController@logout")->name('logout');
});

Route::group(['middleware' => 'auth', 'namespace' => 'User', 'as' => 'user.'], function () {
    Route::get('cabinet', "AccountController@cabinet")->name('cabinet');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/', "AdminController@index")->name('index');

    Route::post('/import', "AdminImportController@import")->name('import');
});

Route::fallback(function () {
    abort(404);
});
