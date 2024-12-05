<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlerteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('alertes')->insert([
           'DatLim1' => '2024-12-24',
           'DatLim2' => '2024-12-24',
        ]);
    }
}
