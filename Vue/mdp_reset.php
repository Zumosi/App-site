<?php 
require("../controlleur/reset.php");
?>

<<<<<<< HEAD

<link rel="stylesheet" href="../connexion/css/form.css" type="text/css">
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="Vue/profil.css"/>
    <script type="text/javascript" src="Controleur/NonVide.js"></script>
</head>
<body>
<?php
$email = $_POST["email"];
?>
<link rel="stylesheet" href="../css/form.css" type="text/css">
>>>>>>> ee8cbd91c5efd72253bc10cbed4c390531fa12c9
<div class="body-content">
  <div class="module">
    <h1>Réinitialiser le mot de passe </h1>
    <form class="form" action="mdp_resetliste.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email) ?>"  required />
        <input type="password" placeholder="Nouveau mot de passe" name="newpass" required />
        <input type="password" placeholder="Confirmer le nouveau mot de passe" name="cnewpass" required />
        <input type="submit" value="Envoyer" name="send" class="btn btn-block btn-primary" />

    </form>
</div>
</div>
</body>
</html>