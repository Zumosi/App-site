<?php
require("./Modèle/login.php");
require("./Modèle/insertion_maison.php");

$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

//le formulaire a bien été envoyer
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = verify_User($_SESSION['email']);
    $id= $user['id_utilisateur'];
    //definit toute les variables POST qu'il faut enregistrer dans la basse de données
    $nom = $_POST['maison'];
    $adresse = $_POST['adresse'];
    $nbpiece = $_POST['nbpiece'];
    $type= $_POST['type'];


    //enregistre l'utilisateur dans la base de données
    $maison = insert_maison($type,$nom, $adresse, $nbpiece,$id);
    //si on a réussi à enregistrer l'utilisateur on le redirige vers la page d'accueil


    if (isset($maison)) {
        header("location:index.php?cible=plan");


} else {
        $_SESSION['message'] = 'la maison ne peut pas être ajouté';


    }
}
