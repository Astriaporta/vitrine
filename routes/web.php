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

Route::get('/', 'HomeController@index')->name('home');

// About
Route::resource('about', 'AboutController')->only(['index', 'create', 'edit']);

// Contents
Route::resource('content', 'ContentsController')->only(['store', 'update', 'destroy']);

// News (like blog)
Route::resource('news', 'NewsController');

// Contact us
Route::prefix('contact')->group(function () {
  Route::get('list', 'ContactController@index');
  Route::get('', 'ContactController@create');
  Route::post('', 'ContactController@store');
  Route::delete('{id}', 'ContactController@destroy');
});

// Parameters
Route::resource('parameters', 'ParametersController');

Route::resource('modules', 'ModulesController')->only(['update']);

Route::resource('informations', 'InformationController')->only(['update']);

Route::resource('social', 'SocialController')->only(['store', 'update', 'destroy']);

// Captcha
Route::resource('captcha', 'CaptchaController')->only(['index', 'update']);

// Login and register
Route::resource('register', 'RegistrationController')->only(['create', 'store']);

Route::prefix('login')->group(function () {
  Route::get('', 'SeesionController@create');
  Route::post('', 'SeesionController@store');
});

Route::post('logout', 'SeesionController@destroy')->name('logout');
