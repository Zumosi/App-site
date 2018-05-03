<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 24/04/2018
 * Time: 12:17
 */
session_start();

$titre="Poster";

include("identifiants.php");

include("debut.php");

include("menu.php");

//On récupère la valeur de la variable action

$action = (isset($_GET['action']))?htmlspecialchars($_GET['action']):'';


// Si le membre n'est pas connecté, il est arrivé ici par erreur

if ($id==0) erreur(ERR_IS_CO);

?>
<?php

switch($action)

{

    //Premier cas : nouveau topic

    case "nouveautopic":

        //On passe le message dans une série de fonction

        $message = $_POST['message'];

        $mess = $_POST['mess'];


        //Pareil pour le titre

        $titre = $_POST['titre'];


        //ici seulement, maintenant qu'on est sur qu'elle existe, on récupère la valeur de la variable f

        $forum = (int) $_GET['f'];

        $temps = time();


        if (empty($message) || empty($titre))

        {

            echo'<p>Votre message ou votre titre est vide, 

        cliquez <a href="poster.php?action=nouveautopic&amp;f='.$forum.'">ici</a> pour recommencer</p>';

        }

        else //Si jamais le message n'est pas vide

        {

        }
            //Deuxième cas : répondre

    case "repondre":

    $message = $_POST['message'];


    //ici seulement, maintenant qu'on est sur qu'elle existe, on récupère la valeur de la variable t

    $topic = (int) $_GET['t'];

    $temps = time();


    if (empty($message))

    {

        echo'<p>Votre message est vide, cliquez <a href="poster.php?action=repondre&amp;t='.$topic.'">ici</a> pour recommencer</p>';

    }

    else //Sinon, si le message n'est pas vide

    {


        //On récupère l'id du forum

        $query=$db->prepare('SELECT forum_id, topic_post FROM forum_topic WHERE topic_id = :topic');

        $query->bindValue(':topic', $topic, PDO::PARAM_INT);

        $query->execute();

        $data=$query->fetch();

        $forum = $data['forum_id'];


        //Puis on entre le message

        $query=$db->prepare('INSERT INTO forum_post

        (post_createur, post_texte, post_time, topic_id, post_forum_id)

        VALUES(:id,:mess,:temps,:topic,:forum)');

        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->bindValue(':mess', $message, PDO::PARAM_STR);

        $query->bindValue(':temps', $temps, PDO::PARAM_INT);

        $query->bindValue(':topic', $topic, PDO::PARAM_INT);

        $query->bindValue(':forum', $forum, PDO::PARAM_INT);

        $query->execute();


        $nouveaupost = $db->lastInsertId();

        $query->CloseCursor();


        //On change un peu la table forum_topic

        $query=$db->prepare('UPDATE forum_topic SET topic_post = topic_post + 1, topic_last_post = :nouveaupost WHERE topic_id =:topic');

        $query->bindValue(':nouveaupost', (int) $nouveaupost, PDO::PARAM_INT);

        $query->bindValue(':topic', (int) $topic, PDO::PARAM_INT);

        $query->execute();

        $query->CloseCursor();


        //Puis même combat sur les 2 autres tables

        $query=$db->prepare('UPDATE forum_forum SET forum_post = forum_post + 1 , forum_last_post_id = :nouveaupost WHERE forum_id = :forum');

        $query->bindValue(':nouveaupost', (int) $nouveaupost, PDO::PARAM_INT);

        $query->bindValue(':forum', (int) $forum, PDO::PARAM_INT);

        $query->execute();

        $query->CloseCursor();


        $query=$db->prepare('UPDATE forum_membres SET membre_post = membre_post + 1 WHERE membre_id = :id');

        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        $query->CloseCursor();


        //Et un petit message

        $nombreDeMessagesParPage = 15;

        $nbr_post = $data['topic_post']+1;

        $page = ceil($nbr_post / $nombreDeMessagesParPage);

        echo'<p>Votre message a bien été ajouté!<br /><br />

        Cliquez <a href="index.php">ici</a> pour revenir à l index du forum<br />

        Cliquez <a href="voirtopic.php?t='.$topic.'&amp;page='.$page.'#p_'.$nouveaupost.'">ici</a> pour le voir</p>';

    }//Fin du else

    break;

?>

<?php

    default;

    echo'<p>Cette action est impossible</p>';

} //Fin du Switch

?>

</div>

</body>

</html>
