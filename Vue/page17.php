

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capteurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Vue/page%2017.css" />
</head>
<body>

<?php if ($_GET['capteur']== 'lux') {
    echo
    '<table >
    <caption > Luminosité </caption >
    <tr >
        <th >
    IdCapteur:
        </th >
        <th >
    Admin:
        </th >
        <th >
            <div class="onoffswitch" >
                <input type = "checkbox" name = "onoffswitch" class="onoffswitch-checkbox" id = "myonoffswitch" checked >
                <label class="onoffswitch-label" for="myonoffswitch" >
                    <span class="onoffswitch-inner" ></span >
                    <span class="onoffswitch-switch" ></span >
                </label >
            </div >

        </th >
        <td >
            <a href = "index.php?cible=page 18" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >
    Place:
        </th >
        <th >
    Etat:
        </th >

    </tr >
</table >
<table style = "margin-top: 2vw" >
    <tr >
        <td ><a href = "pagemodifier-ajouter.html" > +</a ></td >
        <th style = "text-align: left" > Ajouter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'hum') {
    echo
    '<table >
    <caption > Humidité </caption >
    <tr >
        <th >
    IdCapteur:
        </th >
        <th >
    Admin:
        </th >
        <th >
            <div class="onoffswitch" >
                <input type = "checkbox" name = "onoffswitch" class="onoffswitch-checkbox" id = "myonoffswitch" checked >
                <label class="onoffswitch-label" for="myonoffswitch" >
                    <span class="onoffswitch-inner" ></span >
                    <span class="onoffswitch-switch" ></span >
                </label >
            </div >

        </th >
        <td >
            <a href = "pagemodifier-ajouter.html" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >
    Place:
        </th >
        <th >
    Etat:
        </th >

    </tr >
</table >
<table style = "margin-top: 2vw" >
    <tr >
        <td ><a href = "pagemodifier-ajouter.html" > +</a ></td >
        <th style = "text-align: left" > Ajouter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'ir') {
    echo
    '<table >
    <caption > Infra-rouge </caption >
    <tr >
        <th >
    IdCapteur:
        </th >
        <th >
    Admin:
        </th >
        <th >
            <div class="onoffswitch" >
                <input type = "checkbox" name = "onoffswitch" class="onoffswitch-checkbox" id = "myonoffswitch" checked >
                <label class="onoffswitch-label" for="myonoffswitch" >
                    <span class="onoffswitch-inner" ></span >
                    <span class="onoffswitch-switch" ></span >
                </label >
            </div >

        </th >
        <td >
            <a href = "pagemodifier-ajouter.html" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >
    Place:
        </th >
        <th >
    Etat:
        </th >

    </tr >
</table >
<table style = "margin-top: 2vw" >
    <tr >
        <td ><a href = "pagemodifier-ajouter.html" > +</a ></td >
        <th style = "text-align: left" > Ajouter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'mic') {
    echo
    '<table >
    <caption > Micro </caption >
    <tr >
        <th >
    IdCapteur:
        </th >
        <th >
    Admin:
        </th >
        <th >
            <div class="onoffswitch" >
                <input type = "checkbox" name = "onoffswitch" class="onoffswitch-checkbox" id = "myonoffswitch" checked >
                <label class="onoffswitch-label" for="myonoffswitch" >
                    <span class="onoffswitch-inner" ></span >
                    <span class="onoffswitch-switch" ></span >
                </label >
            </div >

        </th >
        <td >
            <a href = "pagemodifier-ajouter.html" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >
    Place:
        </th >
        <th >
    Etat:
        </th >

    </tr >
</table >
<table style = "margin-top: 2vw" >
    <tr >
        <td ><a href = "pagemodifier-ajouter.html" > +</a ></td >
        <th style = "text-align: left" > Ajouter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'vid') {
    echo
    '<table >
    <caption > Video-camera </caption >
    <tr >
        <th >
    IdCapteur:
        </th >
        <th >
    Admin:
        </th >
        <th >
            <div class="onoffswitch" >
                <input type = "checkbox" name = "onoffswitch" class="onoffswitch-checkbox" id = "myonoffswitch" checked >
                <label class="onoffswitch-label" for="myonoffswitch" >
                    <span class="onoffswitch-inner" ></span >
                    <span class="onoffswitch-switch" ></span >
                </label >
            </div >

        </th >
        <td >
            <a href = "pagemodifier-ajouter.html" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >
    Place:
        </th >
        <th >
    Etat:
        </th >

    </tr >
</table >
<table style = "margin-top: 2vw" >
    <tr >
        <td ><a href = "pagemodifier-ajouter.html" > +</a ></td >
        <th style = "text-align: left" > Ajouter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'temp') {
    echo
    '<table >
    <caption > Temperature </caption >
    <tr >
        <th >
    IdCapteur:
        </th >
        <th >
    Admin:
        </th >
        <th >
            <div class="onoffswitch" >
                <input type = "checkbox" name = "onoffswitch" class="onoffswitch-checkbox" id = "myonoffswitch" checked >
                <label class="onoffswitch-label" for="myonoffswitch" >
                    <span class="onoffswitch-inner" ></span >
                    <span class="onoffswitch-switch" ></span >
                </label >
            </div >

        </th >
        <td >
            <a href = "pagemodifier-ajouter.html" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >
    Place:
        </th >
        <th >
    Etat:
        </th >

    </tr >
</table >
<table style = "margin-top: 2vw" >
    <tr >
        <td ><a href = "pagemodifier-ajouter.html" > +</a ></td >
        <th style = "text-align: left" > Ajouter un capteur </th >
    </tr >
</table >
';
}

?>

</body>