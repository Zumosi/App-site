<?php
require("Encryption.php");
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "accounts_complete");


$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ( $result->num_rows == 0 ){ // l'utilisateur n'existe pas 
    $_SESSION['message'] = "l'email est incorrect!";
}
else { 
    $user = $result->fetch_assoc();

    if ( Encryption::compare($_POST['password'],$user['password'])) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['nom'] = $user['nom'];
        
        // on sait si l'utilisateur est connecter
        $_SESSION['logged_in'] = true;
        $_SESSION['message'] = "bienvenue $prenom!";

        header("location: acceuil.php");
    }
    else {
        $_SESSION['message'] = "Le mot de passe est incorrect!";
    }
}
}
?>

