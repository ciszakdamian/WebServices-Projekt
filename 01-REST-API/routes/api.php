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
Route::delete('movies/{id}', 'Api\MoviesController@moviesDelete');

Route::get('persons', 'Api\PersonsController@persons');
Route::get('persons/{id}', 'Api\PersonsController@personsById');
Route::post('persons', 'Api\PersonsController@personsSave');
Route::put('persons/{id}', 'Api\PersonsController@personsUpdate');
Route::delete('persons/{id}', 'Api\PersonsController@personsDelete');

Route::get('production_companies', 'Api\ProductionCompaniesController@production_companies');
Route::get('production_companies/{id}', 'Api\ProductionCompaniesController@production_companiesById');
Route::post('production_companies', 'Api\ProductionCompaniesController@production_companiesSave');
Route::put('production_companies/{id}', 'Api\ProductionCompaniesController@production_companiesUpdate');
Route::delete('production_companies/{id}', 'Api\ProductionCompaniesController@production_companiesDelete');

Route::get('casts', 'Api\CastsController@casts');
Route::get('casts/{id}', 'Api\CastsController@castsById');
Route::post('casts', 'Api\CastsController@castsSave');
Route::put('casts/{id}', 'Api\CastsController@castsUpdate');
Route::delete('casts/{id}', 'Api\CastsController@castsDelete');
