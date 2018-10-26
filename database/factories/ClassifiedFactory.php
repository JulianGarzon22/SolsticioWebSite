<?php

use Faker\Generator as Faker;

$factory->define(App\Classified::class, function (Faker $faker) {
  $title = $faker->sentence(4);
  return [
      'user_id' => rand(1,30),
      'category_id' => rand(1,20),
      'name' => $title,
      'slug' => str_slug($title),
      'body' => $faker->text(500),
      'file' => $faker->imageUrl($width = 1200, $height = 720),
      'status' => $faker->randomElement(['DRAFT', 'CHECKING', 'PUBLISHED']),
    ];
});
