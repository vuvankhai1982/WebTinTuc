<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'short_content' => $faker->text(100),
        'content' => $faker->text(500),
        'status_id' => random_int(1, 2),
        'type_id' => 1,
        'image_url' => "https://icdn.dantri.com.vn/thumb_w/640/2020/05/10/fauci-2-1589091114474.jpg",
        'tag_id' => random_int(1, 2),
    ];
});
