<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion Capteur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Vue/gestion capteurs.css" />
</head>



<body>
<form method="post">
    <fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type :</label>
            <SELECT name="Type" id="Type">
                <OPTION>Luminosité
                <OPTION>Temperature
                <OPTION>Micro
                <OPTION>Infra-rouge
                <OPTION>Humidité
                <OPTION>Video-camera
            </SELECT><br>
            <label for="Localisation">Localisation :</label>
            <SELECT name="Localisation"  id="Localisation">
                <option>Salon
                <option>Chambre
                <option>Couloir
            </SELECT><br>
            <label for="Utilisateur">Utilisateur :</label>
            <SELECT name="Utilisateur"  id="Utilisateur">
            <option>Principal
            <option>Secondaire
            </SELECT><br>
            </p>
        </FORM>
            <div class="onoffswitch">
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
    </fieldset>

</body>