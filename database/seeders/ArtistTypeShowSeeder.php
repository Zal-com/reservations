<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\ArtistTypeShow;

class ArtistTypeShowSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        ArtistTypeShow::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'artist_type_id' => 1,
            'show_id' => 1,
        ];

        DB::table('artist_type_shows')->insert($record);
    }
}
