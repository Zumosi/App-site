<?php 
require("../controleur/reset.php");
$email="a@a";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="Vue/profil.css"/>
    <script type="text/javascript" src="Controleur/NonVide.js"></script>
</head>
<body>
<link rel="stylesheet" href="../css/form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Réinitialiser le mot de passe </h1>
    <form class="form" action="mdp_resetliste.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="password" placeholder="Nouveau mot de passe" name="newpass" required />
       <input type="password" placeholder="Confirmer le nouveau mot de passe" name="cnewpass" required />
        <input type="hidden" value="<?php echo htmlspecialchars($email); ?>" name="email" required />
      <input type="submit" value="Envoyer" name="send" class="btn btn-block btn-primary" />

    </form>
     <a href ="connexion.php"> <input type="button" value="Se connecter" name="connexion" class="btn btn-block btn-primary">  </a>
  </div>
</div>l
</body>