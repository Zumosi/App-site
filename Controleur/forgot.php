<?php
require("../Modèle/login.php");
session_start();
$_SESSION['message'] = '';
include("mail.php");
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');


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

        $_SESSION['message'] = "Please check your email $email"
        . " for a confirmation link to complete your password reset!";
        sendmail_forgetpassw($email,)



        header("location:../vue/mdp_reset.php");
  }
}
?>


