<?php
require ("./Controleur/verify_admin.php");



try {
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
if(verify_admin($_SESSION['email'])==true){

$element_shop = $bdd->prepare('SELECT * FROM message');
$element_shop->execute();

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id_message'];
    $posts[1] = $_POST['id_topic'];
    $posts[2] = $_POST['id_user'];
    $posts[3] = $_POST['commentaire'];
    $posts[4] = $_POST['date_commentaire'];

    return $posts;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Search

    if (isset($_POST['search'])) {
        $data = getPosts();

        $search_Query = "SELECT * FROM message WHERE id_message = $data[0]";

        $search_Result = $bdd->prepare($search_Query);
        $search_Result->execute();
        $count = $search_Result->rowCount();
        $result = $search_Result->fetchAll();
        if ($search_Result) {
            if ($count) {
                while ($row = $result) {
                    $id_message = $row['id_message'];
                    $id_user = $row['id_user'];
                    $id_topic = $row['id_topic'];
                    $commentaire = $row['commentaire'];
                    $date_commentaire = $row['date_commentaire'];

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
        $insert_Query = "INSERT INTO message (id_message, id_user, id_topic,commentaire,date_commentaire) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";

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
        $delete_Query = "DELETE FROM message WHERE id_message = $data[0]";

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
        $update_Query = "UPDATE message SET id_user=$data[1],id_topic=$data[2],commentaire=$data[3],date_commentaire=$data[4] WHERE id_message = $data[0]";

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
<link rel="stylesheet" href="Vue/shop_admin.css" id_topic="text/css">
<body>
<div class="content">
    <div class="tab1">
        <table id="shop">
            <tr>
                <th>id_message</th>
                <th>id_user</th>
                <th>id_topic</th>
                <th>commentaire</th>
                <th>date_commentaire</th>
            </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            foreach ($element_shop as $element) {


                ?>
                <tr>
                    <td><?php echo $element['id_message']; ?></td>
                    <td><?php echo $element['id_user']; ?></td>
                    <td><?php echo $element['id_topic']; ?></td>
                    <td><?php echo $element['commentaire']; ?></td>
                    <td><?php echo $element['date_commentaire']; ?></td>

                </tr>
                <?php
            }


            ?>


        </table>

    </div>
    <form action="Vue/message_admin.php" method="post">
        id_message :<input type="number" name="id_message" id="id_message">
        id_user :<input type="number" name="id_user" id="id_user">
        id_topic :<input type="number" name="id_topic" id="id_topic">
        commentaire :<input type="text" name="commentaire" id="commentaire">
        date_commentaire :<input type="text" name="date_commentaire" id="date_commentaire">
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
<?php }
else{
    $_SESSION['message']="vous n'avez pas accès à cette page désolé";
}
?>

</html>
