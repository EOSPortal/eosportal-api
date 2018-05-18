<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('api/chains',                          ['uses'=>'ChainController@index']);
$router->get('api/chains/{chain_id}/infos',         ['uses'=>'InfoController@index']);
$router->get('api/chains/{chain_id}/blocks',        ['uses'=>'BlockController@index']);
$router->get('api/chains/{chain_id}/producers',     ['uses'=>'ProducerController@index']);
$router->get('api/blocks/{block_id}',               ['uses'=>'BlockController@show']);
$router->get('api/producers/{producer_id}',         ['uses'=>'ProducerController@show']);
$router->get('api/producers/{producer_id}/blocks',  ['uses'=>'ProducerController@blocks']);

