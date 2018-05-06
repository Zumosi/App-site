<?php
require("Encryption.php");

session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "root", "accounts_complete");

//le formulaire a bien été envoyer
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows > 0 ){ // l'utilisateur existe  
        $_SESSION['message'] = "l'email est déja utilisé!";
    }
    else{
    //les deux mots de passes sont egaux
        if ($_POST['password'] == $_POST['confirmpassword']) {
        
        //definit toute les variables POST qu'il faut enregistrer dans la basse de données
        $nom = $mysqli->real_escape_string($_POST['nom']);
        $prenom = $mysqli->real_escape_string($_POST['prenom']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = Encryption::encrypt($_POST['password']);
        
        
                //definit les variables de session
                $_SESSION['nom'] = $nom;

                //enregistre l'utilisateur dans la base de données
                $sql = "INSERT INTO users (nom,prenom, email, password) 
                        VALUES ('$nom','$prenom', '$email', '$password')";
                
                //si on a réussi à enregistrer l'utilisateur on le redirige vers la page d'accueil 

                if ($mysqli->query($sql) === true){
                  if (isset($_POST['conditions'])) {
                    
                  
                    $_SESSION['message'] = "Inscription réussie! Bienvenue $prenom $nom!";
                    header("location: acceuil.php");
                }
                else{
                  $_SESSION['message']="Veuillez acceper les conditions du site.";
                }
              }
                else {
                    $_SESSION['message'] = "l'utilisateur ne peut pas être ajouter à la base de données!";
                }
                $mysqli->close();          
            
        
    }
    else {
        $_SESSION['message'] = 'les deux mots de passes ne corespondent pas!';
    }
}
}
?>

