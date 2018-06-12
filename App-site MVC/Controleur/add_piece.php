<?php
require("../Modèle/login.php");
require("../Modèle/insertion_piece.php");

session_start();
$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

//le formulaire a bien été envoyer
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = verify_User('clement.phu@hotmail.fr');

    //definit toute les variables POST qu'il faut enregistrer dans la basse de données
    $nom = $_POST['piece'];
    $superficie = $_POST['superficie'];
    $id= $_GET['maison'];
    $type= $_POST['type'];


    //enregistre l'utilisateur dans la base de données
    $piece = insert_piece($nom, $superficie,$id,$type);
    //si on a réussi à enregistrer l'utilisateur on le redirige vers la page d'accueil


    if (isset($piece)) {
        header("location:../Vue/plan_piece.php");


    } else {
        $_SESSION['message'] = 'la piece ne peut pas être ajouté';


    }
}