<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker::create();
        //Desactiver la vérification des contraintes de clé étrangère
        Schema::disableForeignKeyConstraints();

        //Tronque la table
        Location::truncate();

        //Reactive la vérivifationd es contraintes de clé étrangère
        Schema::enableForeignKeyConstraints();

        $locations = [
            [
                'designation' => 'La Madeleine',
                'address' => 'Adresse random',
                'website' => 'Madeleine.com',
                'phone' => '00000001111',
                'slug' => 'salle-la-madeleine-bruxelles',
                'locality_id' => '1'
            ],
        ];

        DB::table('locations')->insert($locations);
    }
}
