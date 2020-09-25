<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            'country' => 'Colombia',
            'nationality' => 'Colombiano'
        ]);

        DB::table('nationalities')->insert([
            'country' => 'Estados Unidos',
            'nationality' => 'Estadounidense'
        ]);

        DB::table('nationalities')->insert([
            'country' => 'España',
            'nationality' => 'Español'
        ]);

        DB::table('nationalities')->insert([
            'country' => 'Francia',
            'nationality' => 'Francés'
        ]);
    }
}
