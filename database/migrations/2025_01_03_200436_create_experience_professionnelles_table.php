<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experience_professionnelles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->string('type_emploi');
            $table->string('ville');
            $table->string('libelle');
            $table->string('durée');
            $table->char('annee', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_professionnelles');
    }
};
