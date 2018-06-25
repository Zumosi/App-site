<?php

require("./Modèle/login.php");

$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

$user = verify_User($_SESSION['email']);


$piece = $bdd->prepare("SELECT * FROM piece WHERE id_maison=:id");
$piece->execute([
    ":id" => $_GET['maison'],
]);
$room = $piece->fetchAll();
?>



<html>
<head>
    <meta charset="utf-8"/>
    <title>Maison</title>
    <link rel="stylesheet" href="css/plan.css">
</head>
<body>
<div id="content">
    <?php foreach ($room as $m) {
        $id = $m['id_maison'];
        ?>
        <div id="maison">
            <?php echo '<a href="./index.php?piece='.$id.'&cible=info_piece"> <img src="Vue/image/piece.png" alt="maison"></a>' ?>
            <p><?php echo $m['type'] ?> de <?php echo $user['prenom'] ?></p>
        </div>
        <?php
    } ?>

    <div id="newmaison">
        <a href="./index.php?cible=add_piece" id="addmaison"> <img src="Vue/image/add_piece.png" alt="new_maison"></a>
    </div>


</div>
</body>
</html>