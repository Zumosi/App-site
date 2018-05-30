

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capteurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Vue/affichage capteur.css" />
</head>

<body>


<?php if ($_GET['capteur']== 'lux') {
    echo'
    <table id="cible">
    <caption > Luminosité </caption >
    <tr>
        <th >';
    echo 'IdCapteur: ';
    echo ' ' . idcapt(1);
    echo '    
        </th >
        <th >';
    echo 'Admin: ';
    echo ' ' . utilcapt(1);
    echo '
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
            <a href = "index.php?cible=gestion capteurs" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . loccapt(1);
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo ' ' . etatcapt(1);
    echo '
        </th >
        </tr >
</table >
<table >
    <tr id="plus" >
        <td ><a href = "index.php?cible=shop" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';}
elseif ($_GET['capteur']== 'hum') {
    echo
    '<table >
    <caption > Humidité </caption >
    <tr >
        <th >';
    echo 'IdCapteur: ';
    echo ' ' . idcapt(2);
    echo '
        </th >
        <th >';
    echo 'Admin: ';
    echo ' ' . utilcapt(2);
    echo '
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
            <a href = "index.php?cible=gestion capteurs" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . loccapt(2);
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo ' ' . etatcapt(2);
    echo '
        </th >

    </tr >
</table >
<table >
    <tr id="plus">
        <td ><a href = ""index.php?cible=shop"" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'ir') {
    echo
    '<table >
    <caption > Infra-rouge </caption >
    <tr >
    <th>';
    echo 'IdCapteur: ';
    echo ' ' . idcapt(3);
    echo '
        </th >
        <th >';
    echo 'Admin: ';
    echo ' ' . utilcapt(3);
    echo '
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
            <a href = "index.php?cible=gestion capteurs" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . loccapt(3);
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo ' ' . etatcapt(3);
    echo '
        </th >

    </tr >
</table >
<table >
    <tr id="plus">
        <td ><a href = ""index.php?cible=shop"" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'mic') {
    echo
    '<table >
    <caption > Micro </caption >
    <tr >
    <th>';
    echo 'IdCapteur: ';
    echo ' ' . idcapt(4);
    echo '
        </th >
        <th >';
    echo 'Admin: ';
    echo ' ' . utilcapt(4);
    echo '
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
            <a href = "index.php?cible=gestion capteurs" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . loccapt(4);
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo ' ' . etatcapt(4);
    echo '
    Etat:
        </th >

    </tr >
</table >
<table >
    <tr id="plus">
        <td ><a href = ""index.php?cible=shop"" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'vid') {
    echo
    '<table >
    <caption > Video-camera </caption >
    <tr >
    <th>';
    echo 'IdCapteur: ';
    echo ' ' . idcapt(5);
    echo '
        </th >
        <th >';
    echo 'Admin: ';
    echo ' ' . utilcapt(5);
    echo '
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
            <a href = "index.php?cible=gestion capteurs" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . loccapt(5);
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo ' ' . etatcapt(5);
    echo '
        </th >

    </tr >
</table >
<table >
    <tr id="plus">
        <td ><a href = ""index.php?cible=shop"" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';
}
elseif ($_GET['capteur']== 'temp') {
    echo
    '<table >
    <caption > Température </caption >
    <tr >
    <th>';
    echo 'IdCapteur: ';
    echo ' ' . idcapt(6);
    echo '
        <th >';
    echo 'Admin: ';
    echo ' ' . utilcapt(6);
    echo '
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
            <a href = "index.php?cible=gestion capteurs" > Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . loccapt(6);
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo ' ' . etatcapt(6);
    echo '
        </th >

    </tr >
</table >
<table >
    <tr id="plus">
        <td ><a href = "index.php?cible=shop" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';
}

?>

</body>