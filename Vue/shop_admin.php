
<?php



try {
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$element_shop = $bdd->prepare('SELECT * FROM boutique');
$element_shop->execute();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['nom'];
    $posts[2] = $_POST['description'];
    $posts[3] = $_POST['prix'];
    $posts[4] = $_POST['idp'];
    $posts[5] = $_POST['stock'];
    return $posts;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Search

    if (isset($_POST['search'])) {
        $data = getPosts();

        $search_Query = "SELECT * FROM boutique WHERE id_boutique = $data[0]";

        $search_Result = $bdd->prepare($search_Query);
        $search_Result->execute();
        $count = $search_Result->rowCount();
        $result = $search_Result->fetchAll();
        if ($search_Result) {
            if ($count) {
                while ($row = $result) {
                    $id_boutique = $row['id_boutique'];
                    $nom = $row['nom'];
                    $description = $row['description'];
                    $prix = $row['prix'];
                    $id_personne = $row['id_personne'];
                    $stock = $row['stock'];
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
        $insert_Query = "INSERT INTO boutique (id_boutique, nom, description,prix,id_personne,stock) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

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
        $delete_Query = "DELETE FROM boutique WHERE id_boutique = $data[0]";

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
        $update_Query = "UPDATE boutique SET nom=$data[1],description=$data[2],prix=$data[3],id_personne=$data[4],stock=$data[5] WHERE id_boutique = $data[0]";

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
                <th>id_boutique</th>
                <th>nom</th>
                <th>description</th>
                <th>prix</th>
                <th>id_personne</th>
                <th>stock</th>
            </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($element_shop as $element) {


                ?>
                <tr>
                    <td><?php echo $element['id_boutique']; ?></td>
                    <td><?php echo $element['nom']; ?></td>
                    <td><?php echo $element['description']; ?></td>
                    <td><?php echo $element['prix']; ?></td>
                    <td><?php echo $element['id_personne']; ?></td>
                    <td><?php echo $element['stock']; ?></td>

                </tr>
                <?php
            }


            ?>


        </table>

    </div>
    <form action="Vue/shop_admin.php" method="post">
        id_boutique :<input type="number" name="id" id="id">
        nom :<input type="text" name="nom" id="nom">
        description :<input type="text" name="description" id="description">
        prix :<input type="number" name="prix" id="prix">
        id_personne :<input type="number" name="idp" id="idp">
        stock :<input type="number" name="stock" id="stock">
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
