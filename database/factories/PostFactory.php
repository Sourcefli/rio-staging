<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Canvas\Post;
use Faker\Generator as Faker;

$factory->define(\Canvas\Post::class, function (Faker $faker) {
    return [
        'id'                     => $faker->uuid,
        'slug'                   => $faker->slug,
        'title'                  => $faker->word,
        'summary'                => $faker->sentence,
        'body'                   => $faker->realText(),
        'published_at'           => today()->toDateTimeString(),
        'featured_image'         => $faker->imageUrl(),
        'featured_image_caption' => $faker->sentence,
        'user_id'                => function () {
            return factory(App\User::class)->create()->id;
        },
        'meta'                   => [
            'meta_description'    => $faker->sentence,
            'og_title'            => $faker->sentence,
            'og_description'      => $faker->sentence,
            'twitter_title'       => $faker->sentence,
            'twitter_description' => $faker->sentence,
            'canonical_link'      => $faker->sentence,
        ],
    ];
});
