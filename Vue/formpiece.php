<?php
include("../Controleur/BDD.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  <link rel="stylesheet" type="text/css"  href="" />
      <script type="text/javascript" src=""></script> -->
    <title>Choix Pièce </title>
</head>
<body>
<?php

//$_POST["nomcapteur"]="Infrarouge";
$nomcapteur= $_POST["nomcapteur"];
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT id_capteur FROM capteur WHERE type=:nomcapteur');
$requete->execute(array(
    "nomcapteur"=>$nomcapteur
));
$nomcapteur = $requete->fetch();
$idcapteur=1;




?>
<h1>Sur quelle pièce souhaitez vous agir (choisissez une pièce): </h1>
<form method="post" action = "formpieceliste.php" onsubmit="">
    <select name="piece">
        <option name ="piece" value="">Aucune</option><br>
        <option name ="piece" value="Cuisine">Cuisine</option><br>
        <option name ="piece" value="Chambre">Chambre</option><br>
        <option name ="piece" value="SdB">SdB</option><br>
        <option name ="piece" value="Salon">Salon</option><br>
        <option name ="piece" value="WC">WC</option><br>
        <input type="hidden" name ="idcapteur" value="<?php $idcapteur; ?>">
    </select>
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>