<?php

require("../Modèle/login.php");
session_start();
$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_GET['email']) && !empty($_GET['email'])) {
        $email = $_GET['email'];
        $user=verify_User($email);


        if (!isset($user)) {
            $_SESSION['message'] = "Vous avez entré un mauvais URL";
        }
    } else {
        $_SESSION['message'] = "Désolé, l'autenthification a échoué!";
    }
}


?>

