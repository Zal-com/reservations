<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\RepresentationUser;

class RepresentationUserSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        RepresentationUser::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'representation_id' => 1,
            'user_id' => 1,
            'places' => $faker->numberBetween(1, 20)
        ];

        DB::table('representation_users')->insert($record);
    }
}
