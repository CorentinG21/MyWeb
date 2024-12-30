<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ApiSteamController extends Controller
{
    public function InfoSteam()
    {
        $steamId = '76561198426318882'; // Votre Steam ID
        $apiKey = '8CC5CB916EFC1C9B3D45ADC09D4DCB81'; // Clé API Steam

        // URLs pour récupérer les données
        $gamesApiUrl = "http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=$apiKey&steamid=$steamId&format=json&include_appinfo=1&include_played_free_games=1";
        $userApiUrl = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$apiKey&steamids=$steamId";

        $client = new Client();

        $games = [];
        $user = [];

        try {
            // Récupérer les jeux
            $gamesResponse = $client->request('GET', $gamesApiUrl);
            $gamesData = json_decode($gamesResponse->getBody(), true);
            $games = $gamesData['response']['games'] ?? [];
    
            // Trier les jeux par ordre alphabétique du nom
            usort($games, function ($a, $b) {
                return strcmp($a['name'], $b['name']);
            });
        } catch (\Exception $e) {
            Log::error('Erreur lors de la requête des jeux Steam : ' . $e->getMessage());
        }

        try {
            // Récupérer les informations utilisateur
            $userResponse = $client->request('GET', $userApiUrl);
            $userData = json_decode($userResponse->getBody(), true);
            $user = $userData['response']['players'][0] ?? [];
        } catch (\Exception $e) {
            Log::error('Erreur lors de la requête des infos utilisateur Steam : ' . $e->getMessage());
        }

        return view('apisteam', compact('games', 'user'));
    }
}
