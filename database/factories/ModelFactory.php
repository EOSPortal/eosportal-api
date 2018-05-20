<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Chain::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->lastName,
        'api_url' => "http://ctestnet.edenx.io:8888",
    ];
});

$factory->define(App\Producer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'organization' => $faker->company,
        'contact' => $faker->email,
        'p2p_url' => $faker->ipv4.':9876',
        'api_url' => 'http://'.$faker->ipv4.':8888',
    ];
});

$factory->define(App\Block::class, function (Faker\Generator $faker) {
    static $n = 0;
    return [
        'height' => ++$n,
        'produced_at' => Carbon\Carbon::now(),
    ];
});

$factory->define(App\Info::class, function (Faker\Generator $faker) {
    static $n = 0;
    return [
        'server_version' => '9be89106',
        'last_irreversible_block_num' => ($n-3)>0?$n-3:0,
        'head_block_num' => $n++,
    ];
});

