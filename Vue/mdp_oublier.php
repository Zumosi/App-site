<?php
require("../controlleur/forgot.php");
?>
<<<<<<< HEAD

<link rel="stylesheet" href="../connexion/css/form.css" type="text/css">
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="css/profil.css"/>
    <script type="text/javascript" src="Controleur/NonVide.js"></script>
</head>
<body>
<link rel="stylesheet" href="../css/form.css" type="text/css">
>>>>>>> ee8cbd91c5efd72253bc10cbed4c390531fa12c9
<div class="body-content">
    <div class="module">
    <h1>Réinitialiser le mot de passe </h1>
    <form class="form" action="verifcode.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="email" placeholder="Email" name="email" required />
      <input type="submit" value="Envoyer" name="send" class="btn btn-block btn-primary" />

    </form>
    </div>
</div>
</body>