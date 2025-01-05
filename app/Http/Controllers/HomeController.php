<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les formations
        $formations = Formation::all();

        // Récupérer les catégories avec leurs compétences
        $categories = Categorie::with('competences')->get();

        // Retourner les données à la vue
        return view('index', compact('formations', 'categories'));
    }
}
