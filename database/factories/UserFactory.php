<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Mykyta Kovach',
            'email' => 'admin@test.com',
            'company' =>'WSB',
            'city'=>"Poznan",
            'phone'=>"555-555-555",
            'position'=>"Student",
            'department'=>"Informatyka",
             'password' => Hash::make('test')
    ];
});
