<style>
    /* Style de base de la barre latérale */
    aside {
        background: rgb(252, 165, 100);
        display: flex;
        flex-direction: column;
        gap: 10px;
        height: 100vh;
        width: 100px;
        position: fixed;
        left: 0;
        top: 0;
        transition: width 0.5s ease;
    }

    /* Style du titre dans la barre latérale */
    .sidebar-title {
        text-align: center;
        font-size: 1.2rem;
        font-weight: bold;
        color: black;
        margin: 20px 0;
        flex: 0 0 auto;
    }

    /* Style pour la navigation dans la barre latérale */
    aside nav {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Style pour les liens de navigation dans la barre latérale */
    aside a {
        font-size: 1.5rem;
        text-decoration: none;
        color: black;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.5s ease;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-inline: 20px;
    }

    /* Supprime les marges et le padding par défaut des listes */
    aside ul {
        margin: 0;
        padding: 0;
    }

    /* Style pour les éléments de liste dans la barre latérale */
    aside li {
        list-style: none;
        margin: 15px 0;
    }

    /* Style pour les liens au survol (hover) */
    aside a:hover {
        background: black;
        color: white;
    }

    /* Cache le texte des liens lorsqu'ils ne sont pas en mode élargi */
    aside:not(.expanded) a span {
        display: none;
    }

    /* Media queries pour rendre la barre latérale responsive */
    @media (max-width: 768px) {
        aside {
            width: 60px; /* Réduit la largeur de la barre latérale sur les petits écrans */
        }

        aside.expanded {
            width: 200px; /* Agrandit la barre latérale quand elle est "expand" */
        }

        aside a {
            font-size: 1.2rem; /* Réduit la taille de la police */
        }

        aside .sidebar-title {
            font-size: 1rem; /* Réduit la taille du titre */
        }

        aside:not(.expanded) a span {
            display: none; /* Cache le texte des liens sur les petits écrans */
        }

        /* Ajout d'un bouton pour agrandir la barre latérale sur les petits écrans */
        .sidebar-toggle {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgb(252, 165, 100);
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            display: block;
        }

        .sidebar-toggle i {
            color: black;
            font-size: 1.5rem;
        }
    }

    /* Pour les très petits écrans (mobiles) */
    @media (max-width: 480px) {
        aside {
            width: 50px; /* Encore plus étroit pour les très petits écrans */
        }

        aside.expanded {
            width: 180px;
        }

        aside a {
            font-size: 1.1rem; /* Plus petit texte pour les petits écrans */
        }
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

<aside>

    <nav>
        <ul>
            <li>
                <a href="{{ route('index') }}"><i class="bi bi-house-door-fill"></i><span>Accueil</span></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-car-front-fill"></i><span>Api F1</span></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-steam"></i><span>Api Steam</span></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-joystick"></i><span>Veille Techno</span></a>
            </li>
            <li>
                <a href="#"><i class="bi bi-envelope-fill"></i><span>Contact</span></a>
            </li>
        </ul>
    </nav>
</aside>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>