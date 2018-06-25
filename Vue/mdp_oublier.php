<?php
require("../controleur/forgot.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="../css/form.css" type="text/css">
    <script type="text/javascript" src="vue/JS/NonVide.js"></script>
</head>
<body>

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