<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
  $title = $faker->sentence(4);
  return [
      'user_id' => rand(1,30),
      'name' => $title,
      'slug' => str_slug($title),
      'summary' => $faker->text(200),
      'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
