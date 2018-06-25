<?php




try {
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$element_shop = $bdd->prepare('SELECT * FROM habitation');
$element_shop->execute();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id_habitation'];
    $posts[1] = $_POST['type'];
    $posts[2] = $_POST['nom'];
    $posts[3] = $_POST['adresse'];
    $posts[4] = $_POST['nb_piece'];
    $posts[5] = $_POST['id_user'];
    return $posts;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Search

    if (isset($_POST['search'])) {
        $data = getPosts();

        $search_Query = "SELECT * FROM habitation WHERE id_habitation = $data[0]";

        $search_Result = $bdd->prepare($search_Query);
        $search_Result->execute();
        $count = $search_Result->rowCount();
        $result = $search_Result->fetchAll();
        if ($search_Result) {
            if ($count) {
                while ($row = $result) {
                    $id_habitation = $row['id_habitation'];
                    $nom = $row['nom'];
                    $type = $row['type'];
                    $adresse = $row['adresse'];
                    $nb_piece = $row['nb_piece'];
                    $id_user = $row['id_user'];
                }
            } else {
                echo 'No Data For This Id';
            }
        } else {
            echo 'Result Error';
        }
    }


// Insert
    if (isset($_POST['insert'])) {
        $data = getPosts();
        $insert_Query = "INSERT INTO habitation (id_habitation, nom, type,adresse,nb_piece,id_user) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

        $insert_Result = $bdd->prepare($insert_Query);
        $insert_Result->execute();


        if ($insert_Result) {

            echo 'Data Inserted';
        } else {
            echo 'Data Not Inserted';
        }


    }

// Delete
    if (isset($_POST['delete'])) {
        $data = getPosts();
        $delete_Query = "DELETE FROM habitation WHERE id_habitation = $data[0]";

        $delete_Result = $bdd->prepare($delete_Query);
        $delete_Result->execute();

        if ($delete_Result) {

            echo 'Data Deleted';
        } else {
            echo 'Data Not Deleted';
        }


    }

// Edit
    if (isset($_POST['update'])) {
        $data = getPosts();
        $update_Query = "UPDATE habitation SET nom=$data[1],type=$data[2],adresse=$data[3],nb_piece=$data[4],id_user=$data[5] WHERE id_habitation = $data[0]";

        $update_Result = $bdd->prepare($update_Query,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $update_Result->execute();

        if ($update_Result) {

            echo 'Data Updated';
        } else {
            echo 'Data Not Updated';
        }

    }
}


?>
<html>
<link rel="stylesheet" href="Vue/shop_admin.css" type="text/css">
<body>
<div class="content">
    <div class="tab1">
        <table id="shop">
            <tr>
                <th>id_habitation</th>
                <th>nom</th>
                <th>type</th>
                <th>adresse</th>
                <th>nb_piece</th>
                <th>id_user</th>
            </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($element_shop as $element) {


                ?>
                <tr>
                    <td><?php echo $element['id_habitation']; ?></td>
                    <td><?php echo $element['nom']; ?></td>
                    <td><?php echo $element['type']; ?></td>
                    <td><?php echo $element['adresse']; ?></td>
                    <td><?php echo $element['nb_piece']; ?></td>
                    <td><?php echo $element['id_user']; ?></td>

                </tr>
                <?php
            }


            ?>


        </table>

    </div>
    <form action="Vue/habitation_admin.php" method="post">
        id_habitation :<input type="number" name="id_habitation" id="id_habitation">
        nom :<input type="text" name="nom" id="nom">
        type :<input type="text" name="type" id="type">
        adresse :<input type="text" name="adresse" id="adresse">
        nb_piece :<input type="number" name="nb_piece" id="nb_piece">
        id_user :<input type="number" name="id_user" id="id_user">
        <!-- Input For Add Values To Database-->
        <input type="submit" name="insert" value="Add">

        <!-- Input For Edit Values -->
        <input type="submit" name="update" value="Update">

        <!-- Input For Clear Values -->
        <input type="submit" name="delete" value="Delete">

        <!-- Input For Find Values With The given ID -->
        <input type="submit" name="search" value="Find">
    </form>


</div>
<a href="index.php?cible=acceuil_admin" ><button type="button">retour menu</button></a>

</body>

</html>
