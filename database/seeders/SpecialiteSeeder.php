<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('specialite')->insert([
            'NomSpe' => 'SLAM'
        ]);  \DB::table('specialite')->insert([
            'NomSpe' => 'SISR'
        ]);
    }
}
