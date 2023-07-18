<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Account;
use App\Models\Seller;
use Faker\Generator as Faker;

$factory->define(Seller::class, function (Faker $faker) {
    return [
        'account_id' => factory(Account::class)->create()->id,
        'cnpj' => $faker->cnpj(false),
        'fantasy_name' => $faker->company,
        'social_name' => $faker->company,
    ];
});
