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

use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('login');
});
Route::get('/foo', function () {
//    Artisan::call('storage:link');
});

Route::any('/admin', 'AdminController@login')->name('login');

Route::group([
    'prefix' => 'admin'
], function () {
//    Route::get('zzzz', 'AdminController@login');

    Route::group([
        'middleware' => 'web'
    ], function() {
        Route::get('index', 'AdminController@index');
        Route::get('logout', 'AdminController@logout');
        Route::get('profile', 'AdminController@profil');
        Route::get('tests', 'AdminController@tests');
        Route::get('test/{id}', 'AdminController@testView');
        Route::any('profile-edit', 'AdminController@profilEdit');
        Route::any('password-change', 'AdminController@passwordChange');
        Route::get('users', 'AdminController@users');
        Route::get('user/{id}', 'AdminController@userView');
        Route::get('balls', 'AdminController@balls');
    });
});