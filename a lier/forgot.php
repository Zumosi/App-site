<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "root", "accounts_complete");


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ){ // l'utilisateur n'existe pas 
        $_SESSION['message'] = "L'email est incorrect!";
    }
    else {

        $user = $result->fetch_assoc(); // on recupere les valeurs de $user 
        
        $email = $user['email'];
        $nom = $user['nom'];
        $prenom = $user['prenom'];

        $_SESSION['message'] = "Please check your email $email"
        . " for a confirmation link to complete your password reset!";

        // envoie un mail de reset 
        $to      = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hello '.$nom.' '.$prenom.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost:8888/connexion/reset.php?email='.$email.'.'; 
        $header['From']='atHome@contact.com';

        mail($to, $subject, $message_body);

        header("location:mdp_reset.php");
  }
}
?>


