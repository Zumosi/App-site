<?php
require("encryption.php");
require("../Modèle/login.php");


session_start();
$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');


//$email = $bdd->quote($_POST['email']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = verify_User($_POST['email']);




    if (Encryption::compare($_POST['password'], $user['password'])) {

        $_SESSION['email'] = $user['mail'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['id']=$user['id_utilisateur'];

        // on sait si l'utilisateur est connecter
        $_SESSION['logged_in'] = true;
        if($user['type']=='admin'){
            header('Location: ../index.php?cible=acceuil_admin');
        }
        else {
            header('Location: ../index.php?cible=acceuil');
        }
    } else {
        $_SESSION['message'] = "Le mot de passe est incorrect!";

    }
}


