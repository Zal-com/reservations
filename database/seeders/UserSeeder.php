<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();

        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();


        $record = [
            'login' => 'Zalcom',
            'password' => '123456',
            'firstname' => 'Guillaume',
            'lastname' => 'Stordeur',
            'email' => $faker->freeEmail(),
            'langue' => $faker->countryCode(),

        ];

        DB::table('users')->insert($record);
    }
}
