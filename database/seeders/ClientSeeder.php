<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Judy Zapata',
            'document' => '18328320',
            'phone' => '30087432432',
            'address' => 'Calle 12 #123',
            'nationality_id' => '1',
        ]);

        DB::table('clients')->insert([
            'name' => 'Jack Johnson',
            'document' => '575392324',
            'phone' => '33432321',
            'address' => 'Diagonal 9 #23-20',
            'nationality_id' => '2',
        ]);
    }
}
