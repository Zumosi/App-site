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
<?php if ($_GET['gestion']== 'lux') {
    echo'
<form method="post">
    <fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type : Luminosité</label>
                <br>
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
    ';}
elseif ($_GET['gestion']== 'hum') {
    echo
    '<form method="post">
    <fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type : Humidité</label>
                <br>
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

</body>';
}
elseif ($_GET['gestion']== 'ir') {
    echo
    '<form method="post">
    <fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type : Infra-rouge</label>
                <br>
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
';
}
elseif ($_GET['gestion']== 'mic') {
    echo
    '<form method="post">
    <fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type : Micro</label>
                <br>
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
        ';
}
elseif ($_GET['gestion']== 'vid') {
    echo
    '<form method="post">
<fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type : Video-camera</label>
                <br>
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
    </fieldset>';
}
elseif ($_GET['gestion']== 'temp') {
    echo
    '<form method="post">
<fieldset>
        <FORM id="Form"><legend> Mon capteur</legend>
            <p>
                <label for="Type">Type : Temperature</label>
                <br>
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
        ';
}

?>
