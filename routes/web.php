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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blocks/all', [
    'as' => 'blocks.all',
    'uses' => 'BlocksController@all'
]);
Route::get('blocks', [
    'as' => 'blocks',
    'uses' => 'BlocksController@index'
]);
Route::get('chains/all', [
    'as' => 'chains.all',
    'uses' => 'ChainsController@all'
]);
Route::get('chains', [
    'as' => 'chains',
    'uses' => 'ChainsController@index'
]);
Route::get('info/all', [
    'as' => 'info.all',
    'uses' => 'InfoController@all'
]);
Route::get('info', [
    'as' => 'info',
    'uses' => 'InfoController@index'
]);
Route::get('producers/all', [
    'as' => 'producers.all',
    'uses' => 'ProducersController@all'
]);
Route::get('producers', [
    'as' => 'producers',
    'uses' => 'ProducersController@index'
]);
