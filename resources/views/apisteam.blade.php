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
            border-top: 1px solid #ccc;
            /* Couleur de la ligne horizontale */
            width: 25%;
            /* Largeur de la barre à 50% de la largeur de son conteneur */
            margin: 10px auto;
            /* Espacement avant et après la ligne */
        }

        .game-item {
            transition: all 0.3s ease;
            /* Transition douce lors de l'apparition/disparition */
        }
    </style>
</head>

<body>
    <x-header />
    @auth
    <x-user-card
        :avatar="$user['avatarmedium'] ?? ''"
        :name="$user['personaname'] ?? 'Non disponible'"
        :profileUrl="$user['profileurl'] ?? '#'" />

    <input
        type="text"
        id="search-bar"
        placeholder="Recherchez un jeu..."
        style="padding: 10px; width: 300px; margin: 20px auto; display: block; border: 1px solid #ccc; border-radius: 5px;">

    <div id="games-container">
        @foreach($games as $game)
        <div class="game-item"> 
            <x-game-card
                :name="$game['name']"
                :playtime="round($game['playtime_forever'] / 60, 1)" />

            @if(!$loop->last) <!-- Vérifie si ce n'est pas le dernier élément -->
            <hr class="game-divider"> <!-- Ligne horizontale après chaque jeu, sauf pour le dernier -->
            @endif
        </div>
        @endforeach
    </div>
    @else
    <div class="rectangleErreur" style="color: rgb(252, 165, 100);">
        <h1>Connectez-vous pour accéder à l'API Steam</h1>
    </div>
    @endauth
</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const searchBar = document.getElementById("search-bar");
        const games = document.querySelectorAll(".game-item");

        searchBar.addEventListener("input", (e) => {
            const query = e.target.value.toLowerCase().trim(); // Convertir en minuscules et supprimer les espaces inutiles

            games.forEach(game => {
                const gameName = game.textContent.toLowerCase(); // Convertir le contenu en minuscules
                if (gameName.includes(query)) {
                    game.style.display = "block"; // Afficher si correspond
                } else {
                    game.style.display = "none"; // Masquer sinon
                }
            });
        });
    });
</script>

</html>