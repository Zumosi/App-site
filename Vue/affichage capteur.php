<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capteurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="vue/JS/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#button").click(function () {
                var etat = $('#etat').val();
                if (document.getElementById('etat').value == "on") {
                    etat = "off";
                    document.getElementById('etat').value = "off";
                    document.getElementById("etattext").innerHTML = "ON";
                   // alert("état : on ");
                }
                else if (document.getElementById('etat').value == "off") {
                    etat = "on";
                    document.getElementById('etat').value = "on";
                    document.getElementById("etattext").innerHTML = "OFF";
                   // alert("état : off ");
                }
                var varData = 'etat=' + etat;
                console.log(varData);

                $.ajax({
                    type: 'POST',
                    url: 'Vue/CapteurBddliste.php',
                    data: varData,
                    success: function () {
                       // alert("L'état du capteur a été modifié")
                    }


                })
            });
        });
    </script>

    <link rel="stylesheet" href="css/affichage%20capteur.css">
</head>


<body>


<?php
$infocapteur = idcapt();
if ($infocapteur == NULL) {
    echo "Vous n'avez pas de capteurs de ce type ! ";
    echo '<table >
    <tr id="plus">
        <td ><a href = "index.php?cible=shop" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
    ';

} else for($i=0;$i<sizeof($infocapteur)-3;$i++){
    $_SESSION["idcapteur"] = $infocapteur[$i]["id_capteur"];
    echo '<table >';
    echo "<caption >";
    echo $_GET["capteur"];
    echo "</caption >";
    echo "<tr >
        <th>";
    echo 'IdCapteur: ';
    echo ' ' . $infocapteur[$i]["id_capteur"];
    echo '
        </th >
        <th >';
    echo 'Admin: ';
    echo '<br>';

    echo ' ' . $infocapteur[sizeof($infocapteur)-2] . ' ' . $infocapteur[sizeof($infocapteur)-1];
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '
        <td >
            <a href = "index.php?cible=gestion capteurs&type='.$_GET['capteur'].'&idcapt='.$_SESSION['idcapteur'].' "> Modifier</a >
        </td >
    </tr >
    <tr >
        <th >';
    echo 'Place: ';
    echo ' ' . $infocapteur[$i]["nom"];
    echo '
        </th >
        <th >';
    echo 'Etat: ';
    echo '<p id="etattext"> ';
    echo $infocapteur[0]["etat"];
    echo "</p>
   <input type=\"hidden\" name=\"etat\" id=\"etat\" value=\"on\" />
     
  <div id=\"button\"
        <button id=\"button\">
<div class=\"myonoffswitch\" >
    <input type=\"checkbox\" name=\"onoffswitch\" class=\"myonoffswitch\" id=\"myonoffswitch\" >

</div>
    </div>
</button>";

    echo '
        </th >

    </tr >
</table >';
}
echo '
<table >
    <tr id="plus">
        <td ><a href = "index.php?cible=shop" > +</a ></td >
        <th  > Acheter un capteur </th >
    </tr >
</table >
';

?>

</body>
</html>