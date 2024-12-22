<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: rgb(21, 32, 43);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Assure que le corps occupe toute la hauteur de la fenêtre */
        }
        .Header-dash {
            width: 900px; /* Largeur du rectangle */
            height: 150px; /* Hauteur du rectangle */
            background-color: rgb(252, 165, 100); /* Couleur du rectangle */
            border-radius: 10px; /* Coins arrondis */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <x-header />

    <main>
        <div class="Header-dash">
        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Modifier le
                                    profil</a>
                            </li>
        </div>
    </main>
</body>
</html>
