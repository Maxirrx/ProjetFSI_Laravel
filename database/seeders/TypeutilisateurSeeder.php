<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeutilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('typeutilisateur')->insert([
            'TypUti' => 'Administrateur',
        ]);
        \DB::table('typeutilisateur')->insert([
            'TypUti' => 'Etudiant',
        ]);
        \DB::table('typeutilisateur')->insert([
            'TypUti' => 'Tuteur',
        ]);
    }
}
