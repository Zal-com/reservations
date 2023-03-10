<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Type::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'type' => $faker->words(1, true)
        ];

        DB::table('types')->insert($record);
    }
}
