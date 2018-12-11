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

Route::resource('campers', 'CamperController');
Route::resource('images', 'ImageController');
Route::resource('specifications', 'SpecificationController');
Route::resource('extras', 'ExtraController');
Route::resource('includeds', 'IncludedController');

Route::get('campers/{id}/images', 'CamperController@images');
Route::get('campers/{id}/extras', 'CamperController@extras');
Route::get('campers/{id}/specifications', 'CamperController@specifications');
Route::get('campers/{id}/includeds', 'CamperController@includeds');