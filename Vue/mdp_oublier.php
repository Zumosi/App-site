<?php
require("../controlleur/forgot.php");
?>

<link rel="stylesheet" href="../css/form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Réinitialiser le mot de passe </h1>
    <form class="form" action="mdp_oublier.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="email" placeholder="Email" name="email" required />
      <input type="submit" value="Envoyer" name="send" class="btn btn-block btn-primary" />

    </form>
     <a href ="connexion.php"> <input type="button" value="Se connecter" name="connexion" class="btn btn-block btn-primary">  </a>
  </div>
</div>