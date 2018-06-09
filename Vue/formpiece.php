<?php
include("Controleur/BDD.php");
include("Modèle/requete.panier.php");
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
$nomcapteur= $_SESSION["nomcapteur"];
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT id_capteur FROM capteur WHERE type=:nomcapteur');
$requete->execute(array(
    "nomcapteur"=>$nomcapteur
));
$nomcapteur = $requete->fetch();
$idcapteur=1;
?>


<h1>Sur quelle pièce souhaitez vous agir (choisissez une pièce): </h1>
<form method="post" action = "Vue/traitement.php" onsubmit="">
    <select name="piece">

        <?php listepiece($_SESSION['id']) ?>
        <input type="hidden" name ="idcapteur" value="<?php $idcapteur; ?>"/>

    </select>
    <input type="submit" value="Envoyer" name="envoyer" />

</form>

</body>
</html>