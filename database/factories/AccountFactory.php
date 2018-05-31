<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'url' => $faker->url,
        'username' => $faker->name,
        'password' => $faker->password,
        'WriteGroup' => 1,
        'ReadGroup' => 1,
        'Tagid' => 1,
        'Description' => $faker->creditCardNumber,
        'ChangeQueue' => 0
    ];
});
