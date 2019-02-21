<?php

// use App\Company;
use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        // name', 'address', 'website', 'email'
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'website' => $faker->domainName , 
        'address' => $faker->address
    ];
});
