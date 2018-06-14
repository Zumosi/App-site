<?php



try {
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$user = $bdd->prepare('SELECT * FROM utilisateur');
$user->execute();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['nom'];
    $posts[2] = $_POST['prenom'];
    $posts[3] = $_POST['pnumero'];
    $posts[4] = $_POST['password'];
    $posts[5] = $_POST['type'];
    $posts[6] = $_POST['mail'];
    $posts[7] = $_POST['num_principal'];
    return $posts;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Search

    if (isset($_POST['search'])) {
        $data = getPosts();

        $search_Query = "SELECT * FROM utilisateur WHERE id = $data[0]";

        $search_Result = $bdd->prepare($search_Query);
        $search_Result->execute();
        $count = $search_Result->rowCount();
        $result = $search_Result->fetchAll();
        if ($search_Result) {
            if ($count) {
                while ($row = $result) {
                    $id = $row['id'];
                    $nom = $row['nom'];
                    $prenom = $row['prenom'];
                    $numero = $row['numero'];
                    $password = $row['password'];
                    $stock = $row['type'];
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
        $insert_Query = "INSERT INTO boutique (id, nom, prenom,numero,password,type) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

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
        $delete_Query = "DELETE FROM boutique WHERE id = $data[0]";

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
        $update_Query = "UPDATE boutique SET nom=$data[1],prenom=$data[2],numero=$data[3],password=$data[4],type=$data[5] WHERE id = $data[0]";

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
<link rel="stylesheet" href="../Vue/shop_admin.css" type="text/css">
<body>
<div class="content">
    <div class="tab1">
        <table id="shop">
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>numero</th>
                <th>password</th>
                <th>type</th>
                <th>mail</th>
                <th>num_principal</th>
            </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($user as $u) {


                ?>
                <tr>
                    <td><?php echo $u['id']; ?></td>
                    <td><?php echo $u['nom']; ?></td>
                    <td><?php echo $u['prenom']; ?></td>
                    <td><?php echo $u['numero']; ?></td>
                    <td><?php echo $u['password']; ?></td>
                    <td><?php echo $u['type']; ?></td>
                    <td><?php echo $u['mail']; ?></td>
                    <td><?php echo $u['num_principal']; ?></td>

                </tr>
                <?php
            }


            ?>


        </table>

    </div>
    <form action="shop_admin.php" method="post">
        id :<input type="number" name="id" id="id">
        nom :<input type="text" name="nom" id="nom">
        prenom:<input type="text" name="prenom" id="prenom">
        numero :<input type="number" name="numero" id="numero">
        password :<input type="number" name="idp" id="idp">
        type :<input type="number" name="type" id="type">
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


</body>

</html>

