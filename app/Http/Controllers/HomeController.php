<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Categorie;
use App\Models\XpPro;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les formations
        $formations = Formation::all();

        // Récupérer les catégories avec leurs compétences
        $categories = Categorie::with('competences')->get();

        // Récupérer les expériences professionnelles
        $xpPros = XpPro::all();

        // Retourner les données à la vue
        return view('index', compact('formations', 'categories', 'xpPros'));
    }
}
