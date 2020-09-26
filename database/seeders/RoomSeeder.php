<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'number' => '101',
            'status' => 'Disponible',
            'cost'   => '70000',
            'description' => 'Habitación individual',
            'type_id' => '1'
        ]);

        DB::table('rooms')->insert([
            'number' => '201',
            'status' => 'Disponible',
            'cost'   => '90000',
            'description' => 'Habitación doble',
            'type_id' => '2'
        ]);
    }
}
