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

Route::namespace('Api')->name('api.')->group(function ()
{
    Route::name('chains')->get('chains', 'ChainController@index');

    Route::domain('{chain}.eosportal.io')->group(function ()
    {
        Route::name('infos')->get('infos','InfoController@index');

        Route::name('blocks')->get('blocks', 'BlockController@index');
        Route::name('blocks.')->group(function() {
            Route::name('show')->get('blocks/{id}', 'BlockController@show');
        });

        Route::name('producers')->get('producers', 'ProducerController@index');
        Route::name('producers.')->group(function() {
            Route::name('show')->get('producers/{id}', 'ProducerController@show');
        });
    });

});
