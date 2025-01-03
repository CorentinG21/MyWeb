<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body, html {
            margin: 0;
            display: flex;
            justify-content: center;
            background-color: rgb(21, 32, 43);
            /* Couleur de fond */
        }

        /* Responsiveness */
        /* @media (max-width: 1000px) {
            .rectangle {
                width: auto;
                height: auto;
            }
        } */

        
    </style>
</head>

<body>
    <x-header />
    <x-header-dashboard />

    <!-- Vérification du rôle de l'utilisateur -->
    <!-- @if (Auth::user()->role === 'admin')
        <div class="admin-section">
            <h2>Section Administrateur</h2>
            <p>Bienvenue, vous avez accès aux outils d'administration.</p>
        </div>
    @elseif (Auth::user()->role === 'user')
        <div class="user-section">
            <h2>Section Utilisateur</h2>
            <p>Bienvenue, vous avez accès aux fonctionnalités utilisateur.</p>
        </div>
    @else
        <div class="guest-section">
            <h2>Accès Restreint</h2>
            <p>Vous n'avez pas les autorisations nécessaires pour accéder à ce contenu.</p>
        </div>
    @endif -->
</body>
</html>
