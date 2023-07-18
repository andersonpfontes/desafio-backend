<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Account;
use App\Models\Consumer;
use Faker\Generator as Faker;

$factory->define(Consumer::class, function (Faker $faker) {
    return [
        'account_id' => factory(Account::class)->create()->id,
    ];
});
