<?php

function idcapt()
{

    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT id_capteur,etat FROM capteur WHERE id_capteur 
IN(SELECT id_piece FROM piece WHERE id_piece 
IN(SELECT id_habitation FROM habitation WHERE id_maison 
IN (SELECT id_user FROM habitation WHERE id_user=:id_utilisateur))) 
AND type =:type_demande');
    $reponse->execute(array(
        "id_utilisateur"=>$_SESSION["id"],
        "type_demande"=>$_GET["capteur"],
    ));
    $infocapteur=$reponse->fetchAll();
    if($infocapteur==NULL){
        return $infocapteur;
    }
    else {
        $reponse = $bdd->prepare('SELECT nom FROM piece WHERE id_piece IN(SELECT id_place FROM capteur WHERE id_capteur=:id_capteur)');
        $reponse->execute(array(
            "id_capteur" => $infocapteur[0]["id_capteur"]
        ));
        $piece = $reponse->fetch();
        array_push($infocapteur, $piece["nom"]);
        $reponse = $bdd->prepare('SELECT nom,prenom FROM utilisateur WHERE id_utilisateur=:id_utilisateur');
        $reponse->execute(array(
            "id_utilisateur" => $_SESSION["id"]
        ));
        $nomprenom = $reponse->fetch();
        array_push($infocapteur, $nomprenom["nom"]);
        array_push($infocapteur, $nomprenom["prenom"]);
        return $infocapteur;
    }

    $reponse->closeCursor();
    /*
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM capteur WHERE id_capteur = ?');
    $reponse->execute(array($i));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['id_capteur'];
    }
    $reponse->closeCursor();
    */
}
?>

<?php
/*
function etatcapt($f)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM capteur WHERE id_capteur = ?');
    $reponse->execute(array($f));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['etat'];
    }
    $reponse->closeCursor();
}
?>

<?php

function loccapt($f)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM piece WHERE id_piece = ?');
    $reponse->execute(array($f));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['nom'];
    }
    $reponse->closeCursor();
}
?>
<?php
function utilcapt($f)
{
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
$reponse->execute(array($f));
while ($donnees = $reponse->fetch()) {
echo $donnees['nom'];
echo '&nbsp' . $donnees['prenom'];
}
$reponse->closeCursor();
}
*/
?>