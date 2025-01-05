<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    // Relation avec les compétences
    public function competences()
    {
        return $this->hasMany(Competence::class, 'categorie_id');
    }
}
