<?php
require("../controleur/login.php");
?>


<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Se connecter</h1>
    <form class="form" action="connexion.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Mot de passe" name="password" autocomplete="new-password" required />
     
      <input type="submit" value="Se connecter" name="connexion" class="btn btn-block btn-primary" />

    </form>
     <a href ="register.php"> <input type="button" value="S'enregistrer" name="s'enregistrer" class="btn btn-block btn-primary"/> </a>
     <a href="mdp_oublier.php"> <p>mot de passe oublié?</p></a>
    
  </div>
</div>

