<?php
require("../Modèle/login.php");
session_start();
$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {   
    $email =$_POST['email'];
    $user = verify_User($email);


    if (!isset($user)){ // l'utilisateur n'existe pas
        $_SESSION['message'] = "L'email est incorrect!";
    }
    else {

        $email = $user['email'];
        $nom = $user['nom'];
        $prenom = $user['prenom'];

        $_SESSION['message'] = "Please check your email $email"
        . " for a confirmation link to complete your password reset!";

        // envoie un mail de reset 
        $to      = $email;
        $subject = 'Password Reset Link ( atHome.com )';
        $message_body = '
        Hello '.$nom.' '.$prenom.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost:8888/connexion/reset.php?email='.$email.'.'; 
        $header['From']='atHome@contact.com';

        mail($to, $subject, $message_body,$header);

        header("location:../vue/mdp_reset.php");
  }
}
?>


