<?php

require("Encryption.php");
require("../Modèle/login.php");
require("../Modèle/insertion.php");
include("mail.php");

session_start();
$_SESSION['message'] = '';
$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

//le formulaire a bien été envoyer
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = verify_User($_POST['email']);


    if (isset($result)) { // l'utilisateur existe

        $_SESSION['message'] = "l'email est déja utilisé!";
    } else {
        //les deux mots de passes sont egaux
        if ($_POST['password'] == $_POST['confirmpassword']) {
            if($_POST['email']==$_POST['confirmemail']) {

                //definit toute les variables POST qu'il faut enregistrer dans la basse de données
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $numero = $_POST['telNo'];
                $password = $_POST['password'];
                if (strlen($password) < 8) {
                    $_SESSION['message'] = "le mot de passe n'est pas conforme veuillez entrer 8 caractères minimum avec au moins une majuscule et un chiffre";
                } else {
                    if (preg_match('#^(?=.*[a-z])(?=.*[0-9])#', $password)) {
                        $password = Encryption::encrypt($_POST['password']);

                    } else {
                        $_SESSION['message'] = "le mot de passe n'est pas conforme veuillez entrer 8 caractères minimum avec au moins une majuscule et un chiffre";

                    }
                }


                //definit les variables de session
                $_SESSION['nom'] = $nom;

                //enregistre l'utilisateur dans la base de données
                $user = insert_user($nom, $prenom, $email, $numero, $password);

                //si on a réussi à enregistrer l'utilisateur on le redirige vers la page d'accueil


                if (isset($user)) {
                    if (isset($_POST['conditions'])) {


                        $_SESSION['message'] = "Inscription réussie! Bienvenue $prenom $nom!";
                        sendmail_bienvenue($email);


                        header("location: ../index.php?cible=acceuil");
                    } else {
                        $_SESSION['message'] = "Veuillez acceper les conditions du site.";
                    }
                } else {
                    $_SESSION['message'] = "l'utilisateur ne peut pas être ajouter à la base de données!";
                }
            }
            else{
                $_SESSION['message']='les deux adresses emil ne corespondent pas!';
            }

        } else {
            $_SESSION['message'] = 'les deux mots de passes ne corespondent pas!';
        }
    }
}
?>

