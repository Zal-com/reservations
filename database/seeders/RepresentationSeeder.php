<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Representation;

class RepresentationSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Representation::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'show_id' => 1,
            'when' => $faker->dateTime(),
            'location_id' => 1
        ];

        DB::table('representations')->insert($record);
    }
}

