<?php


require("Modèle/login.php");



$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

$user = verify_User($_SESSION['email']);


$maison = $bdd->prepare("SELECT * FROM habitation WHERE id_user=:id");
$maison->execute([
    ":id" => $_SESSION['id'],
]);
$home = $maison->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Maison</title>
    <link rel="stylesheet" href="Vue/plan.css"/>
</head>
<body>
<div id="content">
    <?php foreach ($home as $m) {
        $id = $m['id_habitation'];
        ?>
        <div id="maison">
            <?php echo '<a href="index.php?maison='.$id.'&cible=plan_piece"> <img src="Vue/image/maison.png" alt="maison"></a>' ?>
            <p><?php echo $m['type'] ?> de <?php echo $user['prenom'] ?></p>
        </div>
        <?php
    } ?>

    <div id="newmaison">
        <a href="index.php?cible=add_maison" id="addmaison"> <img src="Vue/image/add_maison.png" alt="new_maison"></a>
    </div>

</div>
</body>
</html>


