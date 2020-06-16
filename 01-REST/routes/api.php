<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('movies', 'Api\MoviesController@movies');
Route::get('movies/{id}', 'Api\MoviesController@moviesById');
Route::post('movies', 'Api\MoviesController@moviesSave');
Route::put('movies/{id}', 'Api\MoviesController@moviesUpdate');
