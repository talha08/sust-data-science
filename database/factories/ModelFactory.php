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


//for users table
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


//for tags table
$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' =>$faker->word,
    ];
});


//for blog table
$factory->define(App\Blog::class, function (Faker\Generator $faker) {
    return [
        'title' =>$faker->sentence(15),
        'views' =>$faker->numberBetween($min = 112, $max = 215),
        'share' =>$faker->numberBetween($min = 1, $max = 15),
        'like' =>$faker->numberBetween($min = 1, $max = 15),
        'tag' =>$faker->word,
        'image' =>$faker->imageUrl($width = 558, $height = 221),
        'img_thumbnail' =>$faker->imageUrl($width = 81, $height = 81),
        'details' => $faker->sentence(500),
        'user_id' => 1,
        'meta_data' => $faker->unique()->word,
    ];
});


//for award table
$factory->define(App\Award::class, function (Faker\Generator $faker) {
    return [
        'award_title' =>$faker->sentence(10),
        'award_details' =>$faker->sentence(300),
        'award_developer' =>$faker->name,
        'award_supervisor' =>$faker->name,
        'award_position' =>$faker->word,
        'award_image' =>$faker->imageUrl($width = 558, $height = 221),
        'award_meta_data' =>$faker->unique()->word,
    ];
});


//for paper table
$factory->define(App\Paper::class, function (Faker\Generator $faker) {
    return [
        'paper_title' =>$faker->sentence(10),
        'paper_details' =>$faker->sentence(300),
        'paper_author' =>$faker->name,
        'paper_supervisor' =>$faker->name,
        'paper_meta_data' =>$faker->unique()->word,
        'paper_url' =>$faker->url,
    ];
});

//for project table
$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'project_title' =>$faker->sentence(10),
        'project_details' =>$faker->sentence(300),
        'project_developer' =>$faker->name,
        'project_supervisor' =>$faker->name,
        'project_url' =>$faker->url,
        'project_image' =>$faker->imageUrl($width = 558, $height = 221),
        'project_status' =>1,
        'project_meta_data' =>$faker->unique()->word,
    ];
});



//for projectCat table
$factory->define(App\ProjectCat::class, function (Faker\Generator $faker) {
    return [
        'cat_name' =>$faker->sentence(10),
        'cat_details' =>$faker->sentence(100),

    ];
});


//for news table
$factory->define(App\News::class, function (Faker\Generator $faker) {
    return [
        'news_title' =>$faker->sentence(10),
        'news_details' =>$faker->sentence(300),
        'news_image' =>$faker->imageUrl($width = 558, $height = 221),
        'news_meta_data' =>$faker->unique()->word,
    ];
});



//for event table
$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'event_title' =>$faker->sentence(10),
        'event_details' =>$faker->sentence(300),
        'event_start' =>$faker->date('Y-m-d'),
        'event_end' =>$faker->date('Y-m-d'),
        'event_time' =>$faker->time('H:i:s'),
        'event_image' =>$faker->imageUrl($width = 558, $height = 221),
        'event_meta_data' =>$faker->unique()->word,
    ];
});