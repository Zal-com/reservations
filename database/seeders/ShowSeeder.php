<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Show;

class ShowSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Show::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'slug' => $faker->slug(3),
            'title' => $faker->words(2, true),
            'description' => $faker->text(),
            'poster_url' => $faker->imageUrl(),
            'location_id' => 1,
            'bookable' => $faker->numberBetween(0,1),
            'price' => $faker->randomFloat(2, 0, 200)
        ];

        DB::table('shows')->insert($record);
    }
}
