<?php

include("Controleur/BDD.php");
include("Controleur/Securisation.php");
$com=securisation($_POST["commentaire"]);
$object = new Bdd;
$requete = $object->connect()->prepare('INSERT INTO message(id_topic,id_user,commentaire,date_commentaire)
VALUES (:idtopic,:iduser,:com,NOW())');
$requete->execute(array(
    "idtopic"=>$_POST["idtopic"],
    "iduser"=>$_SESSION["id"],
    "com"=>$com,
));
echo "Votre commentaire  $com a bien été ajouté";
?>

<form method="POST" action="forum.php">
<input type="submit" name="Ok" value="Retourner sur le forum" >
</form>

