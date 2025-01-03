<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XpProTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experience_professionnelles')->insert([
            'nom_entreprise' => 'New Calif',
            'type_emploi' => 'Job Etudiant',
            'ville' => 'Bellême',
            'libelle' => 'Accueil clientèle / Préparation du service / Services sur table / Préparation de la salle',
            'durée' => '5 semaine',
            'annee' => '2021',
        ]);

        DB::table('experience_professionnelles')->insert([
            'nom_entreprise' => 'Cesi Rouen',
            'type_emploi' => 'Stage',
            'ville' => 'Saint-Étienne-du-Rouvray',
            'libelle' => 'Stage obligatoire de première année à réaliser en entreprise, création de pages interactives et utilisation d\'API.',
            'durée' => '5 semaine',
            'annee' => '2023',
        ]);

        DB::table('experience_professionnelles')->insert([
            'nom_entreprise' => 'Cesi Rouen',
            'type_emploi' => 'Stage',
            'ville' => 'Saint-Étienne-du-Rouvray',
            'libelle' => 'Stage obligatoire de deuxième année à réaliser en entreprise, création de pages web et utilisation d\'API et de Javascript.',
            'durée' => '6 semaine',
            'annee' => '2024',
        ]);
    }
}
