<?php
ini_set("display_errors", 0);
error_reporting(0);
include("Controleur/BDD.php");
include("Modèle/requete.topic.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="css/forum.css"/>
</head>
<body>

<?php listemessage() ?>


<h1>FORUM</h1>
<h2>Sujet : <?php echo htmlspecialchars($_POST["sujet$sujetchoisi"]); ?></h2>
<form method="post" action="ajoutcom.php" id="formulairecom" onsubmit="">
    <input type="hidden" name="idtopic" value="<?php echo htmlspecialchars($sujetchoisi); ?>"/>
    <input type="submit" name="commentaire" value="Ajouter un commentaire">
</form>


</body>
</html>
