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
        'name' => 'Cesar Cortes',
        'email' => 'ackwebroad@gmail.com',
        'password' => $password ?: $password = bcrypt('secretowe'),
        'roll_id' => 1,
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    
    return [
        'name' => substr($faker->sentence(3), 0, -1),
        'description' => $faker->sentence(10),
        'long_description' => $faker->text(200),        
        'price' => $faker->randomFloat(2, 10, 1500), // 48.8932
        'existen' => $faker->numberBetween(0,25),

        'category_id' => $faker->numberBetween(1,5)        
    ];
});

$factory->define(App\ProductImage::class, function (Faker\Generator $faker) {
    
    return [        
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'product_id' => $faker->numberBetween(1,50)
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => ucfirst($faker->word),
        'description' => $faker->sentence(25)      
    ];
});

$factory->define(App\Rolluser::class, function (Faker\Generator $faker) {

    return [
        'name' => ucfirst($faker->word)        
    ];
});
