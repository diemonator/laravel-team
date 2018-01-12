<?php
/**
 * Created by PhpStorm.
 * User: Emil Karamihov
 * Date: 11/30/2017
 * Time: 10:06
 */
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

$factory->define(App\Content::class, function (Faker $faker) {
    return [
        'info' => $faker->paragraph,
        'img' => 'download.jpg',
        'title' => $faker->title,
        'author' => $faker->name,
    ];
});
