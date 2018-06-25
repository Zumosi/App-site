<?php

require("./Modèle/login.php");



$bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');

$user = verify_User($_SESSION['email']);

$piece = $bdd->prepare("SELECT * FROM capteur WHERE id_piece=:id");
$piece->execute([
    ":id" => $_GET['piece'],
]);
$capteur = $piece->fetchAll();


?>



<html>
<head>
    <meta charset="utf-8"/>
    <title>Maison</title>
    <link rel="stylesheet" href="Vue/plan.css">
</head>
<body>
<div id="content">


    <?php foreach ($capteur as $m) {
        ?>
        <div id="maison">
            <?php if ($m['type']='infrarouge'){ ?>
             <img src="Vue/image/infrared.png">
            <?php} ?>
            <p><?php echo $m['type'] ?></p>


            <?php if ($m['type']='humidité'){ ?>
            <img src="Vue/image/humidity.png">
            <?php} ?>
            <p><?php echo $m['type'] ?></p>


            <?php if ($m['type']='luminosité'){ ?>
            <img src="Vue/image/brightness.png">
            <?php} ?>
            <p><?php echo $m['type'] ?></p>


            <?php if ($m['type']='micro'){ ?>
            <img src="Vue/image/micro.png">
            <?php} ?>
            <p><?php echo $m['type'] ?></p>


            <?php if ($m['type']='vidéo caméra'){ ?>
            <img src="Vue/image/vidéo-camera.png">
            <?php} ?>
            <p><?php echo $m['type'] ?></p>


            <?php if ($m['type']='temperature'){ ?>
            <img src="Vue/image/temperature.png">
            <?php} ?>
            <p><?php echo $m['type'] ?></p>

        </div>
        <?php
    } ?>

    <div id="newmaison">
        <a href="./index.php?cible=shop" id="addmaison"> <img src="Vue/image/add.png" alt="new_capteur"></a>
    </div>


</div>
</body>
</html>
