<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        body {
            background-color: rgb(21, 32, 43);
        }

        .CV {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Rectangle1 {
            margin-top: 20px;
            padding: 20px;
            width: auto;
            max-width: 1000px;
            height: auto;
            background-color: whitesmoke;
            border-radius: 10px;
        }

        .header-cv {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            width: auto;
            height: auto;
            background-color: lightgray;
            border-radius: 10px;
        }

        .content-header-cv {
            display: flex;
            justify-content: space-between;
        }

        .Details {
            padding-top: 10px;
        }

        .lig1,
        .lig2 {
            display: flex;
            justify-content: space-between;
        }

        .profilPerso {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Centre les enfants horizontalement */
        }

        .TitrePP {
            width: 100%;
            /* S'étend sur toute la largeur du parent */
            text-align: center;
            /* Aligne le titre à gauche */
            font-size: 1.5rem;
        }

        .content-PP {
            display: flex;
            /* Active Flexbox */
            align-items: center;
            /* Aligne verticalement l'icône et le texte */
            border: 3px solid black;
            border-radius: 10px;
            padding: 10px;
            width: 800px;
            height: auto;
            margin: auto;
        }

        .content-PP .icon {
            margin-right: 15px;
            /* Espacement entre l'icône et le texte */
            font-size: 24px;
            /* Taille de l'icône */
            color: black;
            /* Couleur bleue par défaut */
        }

        .Formation {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            /* Les enfants s'empilent verticalement */
            align-items: center;
            /* Centre les enfants horizontalement */
        }

        .TitreFormation {
            width: 100%;
            /* S'étend sur toute la largeur */
            text-align: center;
            /* Aligne le titre à gauche */
            font-size: 1.5rem;
        }

        .block-content-formation {
            display: flex;
            width: 1000px;
            justify-content: space-between;
            gap: 10px;
        }

        .content-formation {
            border: 3px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            width: 800px;
            /* Largeur fixe pour centrer */
            text-align: left;
            /* Aligne le contenu à gauche */
        }

        .CompTech-CompGéné {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .TitreCompTech {
            width: 100%;
            text-align: center;
            font-size: 1.2rem;
        }

        .block-content-CompTech {
            display: flex;
            width: 600px;
            justify-content: space-between;
            gap: 10px;
        }

        .content-CompTech {
            border: 3px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            width: 400px;
            text-align: left;
        }

        .TitreCompGéné {
            width: 100%;
            text-align: center;
            font-size: 1.2rem;
        }

        .categorie {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .EpPro-CentreInteret-NivLang {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <x-header />


    <div class="CV">
        <div class="Rectangle1">
            <div class="header-cv">
                <div class="content-header-cv">
                    <img src="{{ asset('Image/20230715_063227.jpg') }}" alt="photo" style="width: 250px; height: auto; border-radius: 5px; padding-right: 15px;">
                    <div class="text-header-cv">
                        <h1>Corentin GODON</h1>
                        <h3>Stage 3ème année Bachelor Développement Web Ecole IRIS Rouen</h3>
                        <span>Diplômé d’un BTS SIO (Services Informatiques aux Organisations), spécialité SLAM ( Solutions logicielles et applications métiers ).</span>
                        <div class="Details">
                            <div class="lig1">
                                <p><i class="bi bi-balloon"></i> 21 ans</p>
                                <p><i class="bi bi-flag"></i> Française</p>
                                <p><i class="bi bi-telephone"></i> 06-38-81-58-52</p>
                                <p><i class="bi bi-car-front"></i> Permis B</p>
                            </div>
                            <div class="lig2">
                                <p><i class="bi bi-geo-alt"></i> 32 rue de la plaine, 76240 Bonsecours</p>
                                <p><i class="bi bi-envelope"></i> corentingodon21@gmail.com</p>
                                <p><a href="https://www.linkedin.com/in/corentin-godon-49187717a/" target="_blank" style="text-decoration: none; color: black"><i class="bi bi-linkedin"></i> Linkedin</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profilPerso">
                <div class="TitrePP">
                    <h3>--- Profil Personnel ---</h3>
                </div>
                <div class="content-PP">
                    <div class="icon">
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <p>
                        Ma personnalité a pour principaux traits l'ouverture et l'écoute. J'aime apprendre de nouvelles connaissances. J'aime travailler en équipe et je m'adapte très bien aux différentes situations.
                    </p>
                </div>
            </div>
            <div class="Formation">
                <div class="TitreFormation">
                    <h3>--- Formations ---</h3>
                </div>
                <div class="block-content-formation">
                    @if($formations->isEmpty())
                    <p>Aucune formation disponible.</p>
                    @else
                    @foreach ($formations as $formation)
                    <div class="content-formation">
                        <h3>{{ $formation->diplome }}</h3>
                        <p><strong>Années :</strong> {{ $formation->annee_debut }} - {{ $formation->annee_fin }}</p>
                        <p><strong>Établissement :</strong> {{ $formation->etablissement }}</p>
                        <p><strong>Ville :</strong> {{ $formation->ville }}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="CompTech-CompGéné">
                <div class="CompeTech">
                    <div class="TitreCompTech">
                        <h3>--- Compétences Techniques ---</h3>
                    </div>
                    <div class="block-content-CompTech">
                        @foreach ($categories as $categorie)
                        <div class="content-CompTech">
                            <div class="categorie">
                                {{ $categorie->nom }}
                            </div>
                            <ul class="competences">
                                @foreach ($categorie->competences as $competence)
                                <li>{{ $competence->nom }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="CompGéné">
                    <div class="TitreCompGéné">
                        <h3>--- Compétences Générales ---</h3>
                    </div>
                </div>
            </div>
            <div class="EpPro-CentreInteret-NivLang">
                <div class="EpPro">
                    <div class="TitreEpPro">
                        <h3>--- Expériences Professionnelles ---</h3>
                    </div>
                </div>
                <div class="CentreInteret-NivLang">
                    <div class="CentreInteret">
                        <div class="TitreCentreInteret">
                            <h3>--- Centres d'intérêts ---</h3>
                        </div>
                    </div>
                    <div class="NivLang">
                        <div class="TitreNivLang">
                            <h3>--- Niveau de Langues ---</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>