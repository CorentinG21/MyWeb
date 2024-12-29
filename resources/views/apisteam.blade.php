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
    </style>
</head>
<body>
    <x-header />
    @auth
        <h1>Liste des Jeux Steam</h1>
            @if (!empty($games))
                <ul>
                    @foreach ($games as $game)
                        <li>
                            <strong>{{ $game['name'] ?? 'Nom inconnu' }}</strong><br>
                            Temps joué : {{ round($game['playtime_forever'] / 60, 1) }} heures
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Aucun jeu trouvé pour cet utilisateur.</p>
            @endif
    @else
        <div class="rectangleErreur" style="color: rgb(252, 165, 100);">
            <h1>Connectez-vous pour accéder à l'API Steam</h1>
        </div>
    @endauth
</body>
</html>