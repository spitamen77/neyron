<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('auth/index', 'Api\AuthController@index');

Route::group([
    'prefix' => 'users'
], function () {
    Route::get('index', 'Api\UserController@index');
    Route::post('getuser', 'Api\UserController@getUser');
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
//        Route::post('update', 'Api\UserController@update');
//        Route::post('password-change', 'Api\UserController@passwordChange');
//        Route::post('password-old', 'Api\UserController@passwordOld');

    });
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('signup', 'Api\AuthController@signup');
//    Route::post('forgot', 'Api\AuthController@forgot');
//    Route::post('smsverify', 'Api\AuthController@smsverify');
//    Route::post('forgot-change', 'Api\AuthController@passwordForgot');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'Api\AuthController@logout');
//        Route::get('sendsmsver', 'Api\AuthController@sendsmsver');
    });
});

Route::group([
    'prefix' => 'data'
], function () {
    Route::get('viloyat', 'Api\DataController@viloyat');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
//        Route::get('notification', 'Api\DataController@notification');
    });
});

Route::group([
    'prefix' => 'test'
], function () {
    Route::get('index', 'Api\DataController@index');
    Route::post('add-test', 'Api\DataController@addTest');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {

//        Route::get('history', 'Api\DataController@getHistory');
//        Route::get('view/{id}', 'Api\DataController@testView');
    });
});

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact Telegram @phpunit'], 404);
});