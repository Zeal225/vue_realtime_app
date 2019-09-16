<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
//    $slugify = new \Cocur\Slugify\Slugify();
    $name = $faker->word;
    return [
        'name'=>$name,
        'slug'=>$name
    ];
});
