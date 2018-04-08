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

Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

//Route::group(['middleware' => 'auth:api'], function() {
	//Categories routes
    Route::get('categories', 'Api\CategoryController@index');
    Route::get('categories/{category}', 'Api\CategoryController@show');
    Route::post('categories', 'Api\CategoryController@store');
    Route::put('categories/{category}', 'Api\CategoryController@update');
    Route::delete('categories/{category}', 'Api\CategoryController@delete');
	
	
	//Links routes
    Route::get('links', 'Api\LinkController@index');
    Route::get('links/{link}', 'Api\LinkController@show');
    Route::post('links', 'Api\LinkController@store');
    Route::put('links/{link}', 'Api\LinkController@update');
    Route::delete('links/{link}', 'Api\LinkController@delete');
	
	//link_tag pivot
	Route::post('links/attachTags/{link}', 'Api\LinkController@attachTags');
	Route::post('links/detachTags/{link}', 'Api\LinkController@detachTags');
	Route::get('links/tags/{link}', 'Api\LinkController@tags');
//});