<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        DB::table('formation')->insert([
            'annee_debut' => '2012',
            'annee_fin' => '2020',
            'etablissement' => 'Jean Baptiste de la Salle',
            'diplome' => 'Bevet',
            'ville' => 'Rouen',
        ]);

        DB::table('formation')->insert([
            'annee_debut' => '2020',
            'annee_fin' => '2022',
            'etablissement' => 'Campus La Châtaigneraie',
            'diplome' => 'Bac Sti2D',
            'ville' => 'Le Mesnil-Esnard',
        ]);

        DB::table('formation')->insert([
            'annee_debut' => '2022',
            'annee_fin' => '2024',
            'etablissement' => 'Campus La Châtaigneraie',
            'diplome' => 'BTS SIO',
            'ville' => 'Le Mesnil-Esnard',
        ]);
    }
}
