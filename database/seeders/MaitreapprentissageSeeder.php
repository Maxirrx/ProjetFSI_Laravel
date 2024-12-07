<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaitreapprentissageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('maitreapprentissage')->insert([
            'TelMai' => '06 54 65 35 55',
            'MailMai' => 'maitreapprentissage@gmail.com',
            'NomMai' => 'Leoroi',
            'PreMai' => 'Leo',
        ]);
    }
}
