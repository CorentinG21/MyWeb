<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        body {
            background-color: rgb(21, 32, 43)
        }

        .rectangleErreur {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .game-divider {
            border: 0;
            border-top: 1px solid #ccc; /* Couleur de la ligne horizontale */ 
            width: 25%; /* Largeur de la barre à 50% de la largeur de son conteneur */
            margin: 10px auto; /* Espacement avant et après la ligne */
        }

    </style>
</head>
<body>
    <x-header />
    @auth
        <x-user-card 
            :avatar="$user['avatarfull'] ?? ''" 
            :name="$user['personaname'] ?? 'Non disponible'" 
            :profileUrl="$user['profileurl'] ?? '#'"/>
        
        @foreach($games as $game)
            <x-game-card 
                :name="$game['name']" 
                :playtime="round($game['playtime_forever'] / 60, 1)" />
                
            @if(!$loop->last) <!-- Vérifie si ce n'est pas le dernier élément -->
                <hr class="game-divider"> <!-- Ligne horizontale après chaque jeu, sauf pour le dernier -->
            @endif
        @endforeach
    @else
        <div class="rectangleErreur" style="color: rgb(252, 165, 100);">
            <h1>Connectez-vous pour accéder à l'API Steam</h1>
        </div>
    @endauth
</body>
</html>