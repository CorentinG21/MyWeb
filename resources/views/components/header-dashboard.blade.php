<div class="container-navbar">
    <div class="header-content-dashboard">
        <!-- Contenu de la première div -->
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
    </div>
    <div class="navbar-header-admin">
        <div class="navbar-content">
            @if (Auth::user()->role === 'admin')
                <a href="">Liste Users</a>
                <span>|</span>
            @endif
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
        </div>
    </div>   
</div>

<style>
    .container-navbar {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px; /* Espace entre les deux div */
    }

    .navbar-header-admin, .header-content-dashboard {
        width: 1200px;
        background: rgb(252, 165, 100);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header-content-dashboard {
        margin-top: 30px; /* Ce margin peut être ajusté ou supprimé */
    }

    .header-content form button {
        background: none;
        border: none;
        cursor: pointer;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .Titre {
        text-align: center;
        font-size: 1.5rem;
    }

    button {
        font-size: 1rem;
    }
    
    .navbar-content {
        display: flex;
        justify-content: center; /* Centre les textes horizontalement */
        align-items: center; /* Aligne les textes verticalement */
        padding: 10px;
        font-size: 1.2rem; /* Taille des liens */
    }

    .navbar-content a {
        text-decoration: none;
        color: black;
        margin: 0 10px; /* Espace autour des liens */
    }

    .navbar-content a:hover {
        color: white; /* Change la couleur au survol */
    }

    .navbar-content span {
        color: black; /* Couleur des séparateurs */
        margin: 0 10px; /* Espace autour du séparateur */
    }
</style>
