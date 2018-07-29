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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phoneNumber' => $faker->phoneNumber,
        'fbUrl' => $faker->url,
        'jobStatus' => $faker->jobTitle,
        'salary' => $faker->randomDigit,
        'comment' => $faker->paragraph,
        'empImage' => $faker->imageUrl,
        'remember_token' => str_random(10),

        
    ];
});
$factory->define(App\CustomerMail::class, function (Faker\Generator $faker) {
    

    return [
        'CusName' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'phoneNumber' => $faker->phoneNumber,
        'mail' => $faker->paragraph,
        'remember_token' => str_random(10),

        
    ];
});
