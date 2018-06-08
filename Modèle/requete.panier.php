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

