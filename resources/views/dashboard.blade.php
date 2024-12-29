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
            width: 1500px;
            max-width: 1500px;
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
            padding: 20px;
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
            font-size: 3rem;
        }
    </style>
</head>

<body>
    <x-header />

    <div class="rectangle">
        <!-- Contenu à l'intérieur du rectangle -->
        <div class="header-content">
            <a href="{{ route('index') }}">🠔 Retour au Menu principal</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger" style="color: red;">
                    <i class="bi bi-box-arrow-right"></i> Se déconnecter
                </button>
            </form>
        </div>
        <div class="Titre">
            <h1>Votre Dashboard</h1>
        </div>
    </div>
</body>

</html>
