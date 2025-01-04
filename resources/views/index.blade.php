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
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

        .lig1, .lig2 {
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
        </div>
    </div>
</body>
</html>