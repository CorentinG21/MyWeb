<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competences')->insert([
            'nom' => 'RGPD',
            'categorie_id' => '1',
        ]);

        DB::table('competences')->insert([
            'nom' => 'ANSSI',
            'categorie_id' => '1',
        ]);

        DB::table('competences')->insert([
            'nom' => 'PIX',
            'categorie_id' => '1',
        ]);

        DB::table('competences')->insert([
            'nom' => 'C#',
            'categorie_id' => '2',
        ]);

        DB::table('competences')->insert([
            'nom' => 'PYTHON',
            'categorie_id' => '2',
        ]);

        DB::table('competences')->insert([
            'nom' => 'HTML / PHP / CSS',
            'categorie_id' => '2',
        ]);

        DB::table('competences')->insert([
            'nom' => 'Symfony',
            'categorie_id' => '2',
        ]);

        DB::table('competences')->insert([
            'nom' => 'Laravel',
            'categorie_id' => '2',
        ]);

        DB::table('competences')->insert([
            'nom' => 'Visual Studio',
            'categorie_id' => '3',
        ]);

        DB::table('competences')->insert([
            'nom' => 'WampServer',
            'categorie_id' => '3',
        ]);

        DB::table('competences')->insert([
            'nom' => 'MySql',
            'categorie_id' => '3',
        ]);

        DB::table('competences')->insert([
            'nom' => 'SQL Server',
            'categorie_id' => '3',
        ]);
    }
}
