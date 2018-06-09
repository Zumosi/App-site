<?php function prixtotal($prix, $quantité)
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT stock FROM boutique WHERE prix=:prixcapteur ');
    $requete->execute(array(
        "prixcapteur" => $prix));
    $stockactuel = $requete->fetch();
    $stockactuel = $stockactuel[0];
    $stockreel = $stockactuel - $quantité;
    $requete = $object->connect()->prepare('UPDATE boutique SET stock=:newstock WHERE prix=:prixcapteur ');
    $requete->execute(array("newstock" => $stockreel,
        "prixcapteur" => $prix));

    return $prixtotal = floatval($quantité) * floatval($prix);
}

?>

<?php function typecapteur($nomcapt)
{
    $bdd = new Bdd();
    $reponse = $bdd->connect()->prepare('SELECT typeb FROM boutique WHERE nom = ?');
    $reponse->execute(array($nomcapt));
    while ($donnees = $reponse->fetch()) {
        return $donnees['typeb'];
    }
}

?>


<?php function ajoutinfra($quanti)
{
    $quantite = $quanti;
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT NombreCapteurInfrarouge FROM utilisateur WHERE id_utilisateur=:ID');
    $requete->execute(array(
        "ID" => $_SESSION["id"]
    ));
    $quantitebdd = $requete->fetch();
    if ($_SESSION["ajout"] == true) {
        $_SESSION["quantitetotale"] = $quantite + $quantitebdd[0];
        $_SESSION["ajout"] = false;
    }
    $requete = $object->connect()->prepare('UPDATE utilisateur SET NombreCapteurInfrarouge=:quantitetotale WHERE id_utilisateur=:ID ');
    $requete->execute(array(
        "quantitetotale" => $_SESSION["quantitetotale"],
        "ID" => $_SESSION["id"]
    ));
}

?>

<?php function listepiece($id)
{
    $bdd = new Bdd();
    $reponse = $bdd->connect()->prepare('SELECT nom FROM piece INNER JOIN habitation ON piece.id_maison=habitation.id_habitation WHERE habitation.id_user=?');
    $reponse->execute(array($id));
    while ($donnees = $reponse->fetch()) {
        echo '<option name="piece" >' . $donnees['nom'] . '</option>' . '</br>';
    }
}

?>

