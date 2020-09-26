<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceptionistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receptionists')->insert([
            'name' => 'Liliana Mora',
            'document' => '1816392324',
            'phone' => '2918392321',
            'address' => 'Calle 20 #79-20',
            'observation' => 'Turno día',
            'status' => 'Activo',
        ]);

        DB::table('receptionists')->insert([
            'name' => 'Carlos Restrepo',
            'document' => '575392324',
            'phone' => '3094392321',
            'address' => 'Carrera 40 #5 A 20',
            'observation' => 'Turno noche',
            'status' => 'Activo',
        ]);
    }
}
