<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Artist::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
                [
                    'firstname' => $faker->firstName,
                    'lastname' => $faker->lastName
                ],
                [
                        'firstname' => $faker->firstName,
                    'lastname' => $faker->lastName
                ],
                [
                        'firstname' => $faker->firstName,
                    'lastname' => $faker->lastName
                ],
                [
                        'firstname' => $faker->firstName,
                    'lastname' => $faker->lastName
                ],
        ];

        DB::table('artists')->insert($record);
    }

}
