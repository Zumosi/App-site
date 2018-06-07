<?php

require("../Modèle/login.php");
include("BDD.php");
require "encryption_config.php";
require "encryption.php";
session_start();
$_SESSION['mail']="arnold.neuman@gmail.com";
$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['newpass'])&&($_POST['cnewpass'])==($_POST['newpass'])) {
        $email = $_SESSION['mail'];
        $object = new Bdd;
        $requete = $object->connect()->prepare('UPDATE utilisateur SET password=:newpassw WHERE mail=:mail ');
        $requete->execute(array("newpassw"=>Encryption::encrypt($_POST['newpass']),
            "mail"=>$email));
        $_SESSION['message']= "Mot de passe modifié, l'utilisateur avec le mail " .$email. " a maintenant le mdp : " . $_POST['newpass'] ;
        header('Location: http://localhost/App-site/vue/connexion.php');

        /*      $user=verify_User($email);


              if (!isset($user)) {
                  $_SESSION['message'] = "Vous avez entré un mauvais URL";
              }*/
    } else {
        $_SESSION['message'] = "Désolé, l'autenthification a échoué!";
    }
}


?>

