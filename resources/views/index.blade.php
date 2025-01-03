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
                    </div>
                </div>
            </div>
        </div>
        <div class="DL">
            <a href="{{ asset('public\Fichier\Godon_Corentin_CV_Stage_IRIS.pdf') }}" download="pdf"><i class="bi bi-download"></i></a>
        </div>
    </div>
</body>
</html>