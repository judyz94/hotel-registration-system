<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            'name' => 'Individual',
            'description' => '1 cama sencilla'
        ]);

        DB::table('room_types')->insert([
            'name' => 'Doble',
            'description' => '1 cama doble'
        ]);

        DB::table('room_types')->insert([
            'name' => 'Acomodación triple',
            'description' => '1 camarote y 1 cama individual'
        ]);
    }
}
