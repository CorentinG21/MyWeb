<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class XpPro extends Model
{
    use HasFactory;

    // Indiquer le nom exact de la table dans la base de données
    protected $table = 'experience_professionnelles';

    // Spécifier les colonnes autorisées pour les insertions ou mises à jour
    protected $fillable = ['nom_entreprise', 'type_emploi', 'ville', 'libelle', 'durée', 'annee'];
}
