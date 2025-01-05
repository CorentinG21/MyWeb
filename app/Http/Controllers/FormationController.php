<?php

namespace App\Http\Controllers;

use App\Models\Formation;

class FormationController extends Controller
{
    public function index()
    {
        // Récupérer les données de la table formations
        $formations = Formation::all();

        // Retourner la vue avec les données
        return view('index', compact('formations'));
    }
}
