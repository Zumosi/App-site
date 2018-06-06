<?php
include("../Controleur/Modifmdpbdd.php");
$email=$_POST["email"];
echo $email;

$longueur="8";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>verification</title>
    <link rel="stylesheet" href="Vue/profil.css"/>
    <script src="Vue/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script type="text/javascript" src="TestEmail.js"></script>

</head>
<body>
<?php
$newpassw = genererChaineAleatoire($longueur, $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
sendmail_forgetpassw($email,$newpassw);
$object = new Bdd;
$requete = $object->connect()->prepare('UPDATE utilisateur SET password=:newpassw WHERE mail=:mail ');
$requete->execute(array("newpassw"=>Encryption::encrypt($newpassw),
    "mail"=>$email));
echo "Mot de passe modifié, l'utilisateur avec le mail " .$email. " a maintenant le mdp : " . $newpassw ;
//echo 'var email = ' .json_encode($email) . ';';
?>
<div class="body-content">
    <div class="module">
        <h1>Entrez le code reçu par mail :  </h1>
    <form class="form" action="verifcodeliste.php" method="post" enctype="multipart/form-data" autocomplete="off" >
    <input type="password" placeholder="" name="pass" required />
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <input type="hidden" name="passv" value="<?php echo htmlspecialchars($newpassw); ?>"><br>
    <input type="submit" value="Envoyer" name="send" class="btn btn-block btn-primary" />
           </form>
    </div>
</div>
</body>