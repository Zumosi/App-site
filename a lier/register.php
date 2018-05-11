<?php
require("form.php");
?>



<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>S'inscrire</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Nom " name="nom" required />
      <input type="text" placeholder="Prenom " name="prenom" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="email" placeholder="Confirmer l'email" name="email" required />
      <input type="password" placeholder="Mot de passe" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirmé le mot de passe" name="confirmpassword" autocomplete="new-password" required />
      <input type="tel" placeholder="Numero de telephone" name="telNo" required/>
      <div>
        <input type="checkbox" name="conditions" id="conditions">
        <label for="conditions">Acceptez les <a href="conditions_générales.pdf" target="_blank">conditions générales d'utilisation</a> du site.</label>
      </div>
      <input type="submit" value="S'enregistrer" name="register" class="btn btn-block btn-primary" />

    </form>
     <a href ="connexion.php"> <input type="button" value="Se connecter" name="connexion" class="btn btn-block btn-primary">  </a>
  </div>
</div>

