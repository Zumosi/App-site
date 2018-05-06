<?php
require("forgot.php");
?>

<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Réinitialiser le mot de passe </h1>
    <form class="form" action="forgot.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="email" placeholder="Email" name="email" required />
      <input type="submit" value="Envoyer" name="send" class="btn btn-block btn-primary" />

    </form>
     <a href ="login.php"> <input type="button" value="Se connecter" name="connexion" class="btn btn-block btn-primary">  </a>
  </div>
</div>