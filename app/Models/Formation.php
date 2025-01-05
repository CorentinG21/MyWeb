<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    // Indiquer le nom exact de la table dans la base de données
    protected $table = 'formation';

    // Spécifier les colonnes autorisées pour les insertions ou mises à jour
    protected $fillable = ['annee_debut', 'annee_fin', 'etablissement', 'diplome', 'ville'];
}
