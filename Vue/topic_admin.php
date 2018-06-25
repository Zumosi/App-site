<?php





try {
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$element_shop = $bdd->prepare('SELECT * FROM topic');
$element_shop->execute();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id_topic'];
    $posts[1] = $_POST['titre'];
    $posts[2] = $_POST['id_utilisateur'];
    $posts[3] = $_POST['date_crea'];
    return $posts;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Search

    if (isset($_POST['search'])) {
        $data = getPosts();

        $search_Query = "SELECT * FROM topic WHERE id_topic = $data[0]";

        $search_Result = $bdd->prepare($search_Query);
        $search_Result->execute();
        $count = $search_Result->rowCount();
        $result = $search_Result->fetchAll();
        if ($search_Result) {
            if ($count) {
                while ($row = $result) {
                    $id_topic = $row['id_topic'];
                    $id_utilisateur = $row['id_utilisateur'];
                    $titre = $row['titre'];
                    $date_crea = $row['date_crea'];

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
        $insert_Query = "INSERT INTO topic (id_topic, id_utilisateur, titre,date_crea) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";

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
        $delete_Query = "DELETE FROM topic WHERE id_topic = $data[0]";

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
        $update_Query = "UPDATE topic SET id_utilisateur=$data[1],titre=$data[2],date_crea=$data[3] WHERE id_topic = $data[0]";

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
<link rel="stylesheet" href="Vue/shop_admin.css" titre="text/css">
<body>
<div class="content">
    <div class="tab1">
        <table id="shop">
            <tr>
                <th>id_topic</th>
                <th>id_utilisateur</th>
                <th>titre</th>
                <th>date_crea</th>

            </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($element_shop as $element) {


                ?>
                <tr>
                    <td><?php echo $element['id_topic']; ?></td>
                    <td><?php echo $element['id_utilisateur']; ?></td>
                    <td><?php echo $element['titre']; ?></td>
                    <td><?php echo $element['date_crea']; ?></td>


                </tr>
                <?php
            }


            ?>


        </table>

    </div>
    <form action="Vue/topic_admin.php" method="post">
        id_topic :<input titre="number" name="id" id="id">
        id_utilisateur :<input titre="text" name="id_utilisateur" id="id_utilisateur">
        titre :<input titre="text" name="titre" id="titre">
        date_crea :<input titre="number" name="date_crea" id="date_crea">
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
