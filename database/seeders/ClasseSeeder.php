<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('classe')->insert([
            'LibCLa' => '3OLEN',
            'NbEtu' => 15,
        ]);
        \DB::table('classe')->insert([
            'LibCLa' => '4OLEN',
            'NbEtu' => 15,
        ]);
        \DB::table('classe')->insert([
            'LibCLa' => '5OLEN',
            'NbEtu' => 15,
        ]);
    }
}
