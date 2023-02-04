<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Locality;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Locality::truncate();

        Schema::enableForeignKeyConstraints();

        $localities = [
            [
                'postal_code' => '1000',
                'locality' => 'Bruxelles'
            ],
            [
                'postal_code' => '1160',
                'locality' => 'Auderghem'
            ]
        ];

        DB::table('localities')->insert($localities);
    }
}
