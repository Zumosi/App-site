<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page 18</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="page%2018.css" />
</head>

<?php include ("header.php")
?>

<body>
<form method="post">
    <fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type :</label>
            <SELECT name="Type" size="1" id="Type">
                <OPTION>Luminosité
                <OPTION>Temperature
                <OPTION>Micro
                <OPTION>Infra-rouge
                <OPTION>Humidité
                <OPTION>Video-camera
            </SELECT><br>
            <label for="Localisation">Localisation :</label>
            <SELECT name="Localisation" size="1" id="Localisation">
                <option>Salon
                <option>Chambre
                <option>Couloir
            </SELECT><br>
            <label for="Utilisateur">Utilisateur :</label>
            <SELECT name="Utilisateur" size="1" id="Utilisateur">
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

    <?php include ("footer.html");
    ?>
</body>