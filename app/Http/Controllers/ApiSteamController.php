<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ApiSteamController extends Controller
{
    public function index()
    {
        $steamId = '76561198426318882'; // Remplacez par votre Steam ID
        $apiKey = '8CC5CB916EFC1C9B3D45ADC09D4DCB81'; // Lire la clé API depuis .env

        $apiUrl = "http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=$apiKey&steamid=$steamId&format=json&include_appinfo=1&include_played_free_games=1";

        $client = new Client();

        try {
            // Effectuer la requête vers l'API Steam
            $response = $client->request('GET', $apiUrl);
            $data = json_decode($response->getBody(), true);

            // Vérifier si les jeux sont disponibles dans la réponse
            $games = $data['response']['games'] ?? [];

            return view('apisteam', compact('games'));

        } catch (\Exception $e) {
            // Gestion des erreurs
            Log::error('Erreur lors de la requête à l\'API Steam : ' . $e->getMessage());
            return view('apisteam', ['games' => []]);
        }
    }
}
