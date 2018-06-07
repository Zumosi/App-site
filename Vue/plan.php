<?php
require("../Modèle/login.php");
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

$user = verify_User('clement.phu@hotmail.fr');


$id = $user['id_utilisateur'];

$maison = $bdd->prepare("SELECT * FROM habitation WHERE id_user=:id");
$maison->execute([
    ":id" => $id,
]);
$home = $maison->fetchAll();

?>


<html>
<head>
    <meta charset="utf-8"/>
    <title>Maison</title>
    <link rel="stylesheet" href="plan.css">
</head>
<body>
<div id="content">
    <?php foreach ($home as $m) {
        $id = $m['id_habitation'];
        ?>
        <div id="maison">
            <?php echo '<a href="../index.php?maison=$id&cible=piece"> <img src="image/maison.png" alt="maison"></a>' ?>
            <p><?php echo $m['type'] ?> de <?php echo $user['prenom'] ?></p>
        </div>
        <?php
    } ?>

    <div id="newmaison">
        <a href="add_maison.php" id="addmaison"> <img src="image/add_maison.png" alt="new_maison"></a>
    </div>

</div>
</body>
</html>


