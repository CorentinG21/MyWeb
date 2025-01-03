<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'nom' => 'Certifications',
        ]);

        DB::table('categories')->insert([
            'nom' => 'Programmation',
        ]);

        DB::table('categories')->insert([
            'nom' => 'Logiciels',
        ]);
    }
}
