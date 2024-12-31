<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(21, 32, 43);
            /* Couleur de fond */
        }

        .rectangle {
            margin-top: 5%;
            width: 900px;
            max-width: 900px;
            height: auto;
            background: rgb(252, 165, 100);;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsiveness */
        @media (max-width: 1000px) {
            .rectangle {
                width: 90%;
                height: 250px;
            }
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .header-content a {
            text-decoration: none;
        }

        .header-content form button {
            background: none;
            border: none;
            cursor: pointer;
        }

        .Titre {
            text-align: center;
            font-size: 1.5rem;
        }

        button {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <x-header />

    <div class="rectangle">
        <!-- Contenu à l'intérieur du rectangle -->
        <div class="header-content">
            <div class="Titre">
                <h1>Votre Dashboard</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger" style="color: red;">
                    <i class="bi bi-box-arrow-right"></i> Se déconnecter
                </button>
            </form>
        </div>

        <!-- Vérification du rôle de l'utilisateur -->
        @if (Auth::user()->role === 'admin')
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
        @endif
    </div>
</body>


</html>
