<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\ArtistType;

class ArtistTypeSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        ArtistType::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'artist_id' => 1,
            'type_id' => 1,
        ];

        DB::table('artist_types')->insert($record);
    }
}
