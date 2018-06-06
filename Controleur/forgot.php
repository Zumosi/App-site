<?php
require("../Modèle/login.php");
session_start();
$_SESSION['message'] = '';
include("mail.php");
include("Modifmdpbdd.php");
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
$longueur="8";
$newpassw= genererChaineAleatoire($longueur, $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {   
    $email =$_POST['email'];
    $user = verify_User($email);


    if (!isset($user)){ // l'utilisateur n'existe pas
        $_SESSION['message'] = "L'email est incorrect!";
    }
    else {

        $email = $user['mail'];
        $nom = $user['nom'];
        $prenom = $user['prenom'];
        sendmail_forgetpassw($email,$newpassw);
        modifmdp($newpassw,$mail);





        header("location:../vue/mdp_reset.php");
  }
}
?>


