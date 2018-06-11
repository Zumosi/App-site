<?php
require("./Controleur/add.php");
?>


<link rel="stylesheet" href="./Vue/form.css" type="text/css">
<div class="body-content">
    <div class="module">
        <h1>Ajouter une maison</h1>
        <form class="form" action="./index.php?cible=add_maison" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
            <input type="text" placeholder="nom de l'habitation" name="maison" required />
            <input type="text" placeholder="type d'habitation" name="type" required />
            <input type="text" placeholder="adresse" name="adresse"  required />
            <input type="number" placeholder="nombre de piece" name="nbpiece"  required />
            <input type="submit" value="creer la maison" name="create" class="btn btn-block btn-primary" />

        </form>

    </div>
</div>
