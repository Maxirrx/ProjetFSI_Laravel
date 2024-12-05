<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bilan1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('bilans')->insert([
            'LibBil1' => '0001',
            'NotBil1' => 17,
            'RemBil1' => 'Felicitation bon trimeste',
            'NotEnt' => 15,
            'NotOral' => 16,
            'DateBil1' => null,
            
        ]);
    }
}
