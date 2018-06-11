<?php
require("./Controleur/add.php");
?>


<link rel="stylesheet" href="Vue/form.css" type="text/css">
<div class="body-content">
    <div class="module">
        <h1>Ajouter une maison</h1>
        <form class="form" action="add_maison.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
            <input type="text" placeholder="nom de la piece" name="piece" required />
            <input type="number" placeholder="superficie de la piece" name="superficie" required />
            <input type="text" placeholder="type de la piece" name="type"  required />
            <input type="submit" value="creer la maison" name="create" class="btn btn-block btn-primary" />
        </form>
    </div>
</div>
