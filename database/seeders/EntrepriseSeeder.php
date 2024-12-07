<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('entreprise')->insert([
            'TelEnt' => '06 48 56 85 96',
            'MailEnt' => 'societe@societe.com',
            'NomEnt' => 'societe',
            'AdrEnt' => 'societe 6 rue de la societe',
            'CpEnt' => '07452',
            'VilEnt' => 'Strasbourg',
        ]);
    }
}
