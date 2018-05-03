<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 24/04/2018
 * Time: 12:03
 */


session_start();

$titre="Profil";

include("identifiants.php");

include("debut.php");

include("menu.php");

//On récupère la valeur de nos variables passées par URL

$action = isset($_GET['action'])?htmlspecialchars($_GET['action']):'consulter';

$membre = isset($_GET['m'])?(int) $_GET['m']:'';

?>

<?php

//On regarde la valeur de la variable $action

switch($action)

{

    //Si c'est "consulter"

    case "consulter":

        //On récupère les infos du membre

        $query=$db->prepare('SELECT membre_pseudo, membre_avatar,

       membre_email, membre_msn, membre_signature, membre_siteweb, membre_post,

       membre_inscrit, membre_localisation

       FROM forum_membres WHERE membre_id=:membre');

        $query->bindValue(':membre',$membre, PDO::PARAM_INT);

        $query->execute();

        $data=$query->fetch();


        //On affiche les infos sur le membre

        echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Index du forum</a> --> 

       profil de '.stripslashes(htmlspecialchars($data['membre_pseudo']));

        echo'<h1>Profil de '.stripslashes(htmlspecialchars($data['membre_pseudo'])).'</h1>';



        echo'<img src="./images/avatars/'.$data['membre_avatar'].'"

       alt="Ce membre n a pas d avatar" />';



        echo'<p><strong>Adresse E-Mail : </strong>

       <a href="mailto:'.stripslashes($data['membre_email']).'">

       '.stripslashes(htmlspecialchars($data['membre_email'])).'</a><br />';



        echo'<strong>MSN Messenger : </strong>'.stripslashes(htmlspecialchars($data['membre_msn'])).'<br />';



        echo'<strong>Site Web : </strong>

       <a href="'.stripslashes($data['membre_siteweb']).'">'.stripslashes(htmlspecialchars($data['membre_siteweb'])).'</a>

       <br /><br />';



        echo'Ce membre est inscrit depuis le

       <strong>'.date('d/m/Y',$data['membre_inscrit']).'</strong>

       et a posté <strong>'.$data['membre_post'].'</strong> messages

       <br /><br />';

        echo'<strong>Localisation : </strong>'.stripslashes(htmlspecialchars($data['membre_localisation'])).'

       </p>';

        $query->CloseCursor();

        break;

        ?>
        <?php

    //Si on choisit de modifier son profil

    case "modifier":

    if (empty($_POST['sent'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire

    {

        //On commence par s'assurer que le membre est connecté

        if ($id==0) erreur(ERR_IS_NOT_CO);


        //On prend les infos du membre

        $query=$db->prepare('SELECT membre_pseudo, membre_email,

        membre_siteweb, membre_signature, membre_msn, membre_localisation,

        membre_avatar

        FROM forum_membres WHERE membre_id=:id');

        $query->bindValue(':id',$id,PDO::PARAM_INT);

        $query->execute();

        $data=$query->fetch();

        echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Index du forum</a> --> Modification du profil';

        echo '<h1>Modifier son profil</h1>';



        echo '<form method="post" action="voirprofil.php?action=modifier" enctype="multipart/form-data">

       

 

        <fieldset><legend>Identifiants</legend>

        Pseudo : <strong>'.stripslashes(htmlspecialchars($data['membre_pseudo'])).'</strong><br />       

        <label for="password">Nouveau mot de Passe :</label>

        <input type="password" name="password" id="password" /><br />

        <label for="confirm">Confirmer le mot de passe :</label>

        <input type="password" name="confirm" id="confirm"  />

        </fieldset>

 

        <fieldset><legend>Contacts</legend>

        <label for="email">Votre adresse E_Mail :</label>

        <input type="text" name="email" id="email"

        value="'.stripslashes($data['membre_email']).'" /><br />

 

      

        </fieldset>

 

        <fieldset><legend>Informations supplémentaires</legend>

       
        </fieldset>

               

      

        <p>

        <input type="submit" value="Modifier son profil" />

        <input type="hidden" id="sent" name="sent" value="1" />

        </p></form>';

        $query->CloseCursor();

    }

    else //Sinon on est dans la page de traitement

    {

        //Traitement (voir plus bas)

    }

    break;



default; //Si jamais c'est aucun de ceux-là c'est qu'il y a eu un problème :o

echo'<p>Cette action est impossible</p>';



} //Fin du switch


?>

</div>

</body>

</html>
<?php



    else //Cas du traitement

    {

        //On déclare les variables


        $mdp_erreur = NULL;

        $email_erreur1 = NULL;

        $email_erreur2 = NULL;




        //Encore et toujours notre belle variable $i :p

        $i = 0;

        $temps = time();

        $email = $_POST['email'];

        $pass = md5($_POST['password']);

        $confirm = md5($_POST['confirm']);



        //Vérification du mdp

        if ($pass != $confirm || empty($confirm) || empty($pass))

        {

            $mdp_erreur = "Votre mot de passe et votre confirmation diffèrent ou sont vides";

            $i++;

        }


        //Vérification de l'adresse email

        //Il faut que l'adresse email n'ait jamais été utilisée (sauf si elle n'a pas été modifiée)


        //On commence donc par récupérer le mail

        $query=$db->prepare('SELECT membre_email FROM forum_membres WHERE membre_id =:id');

        $query->bindValue(':id',$id,PDO::PARAM_INT);

        $query->execute();

        $data=$query->fetch();

        if (strtolower($data['membre_email']) != strtolower($email))

        {

            //Il faut que l'adresse email n'ait jamais été utilisée

            $query=$db->prepare('SELECT COUNT(*) AS nbr FROM forum_membres WHERE membre_email =:mail');

            $query->bindValue(':mail',$email,PDO::PARAM_STR);

            $query->execute();

            $mail_free=($query->fetchColumn()==0)?1:0;

            $query->CloseCursor();

            if(!$mail_free)

            {

                $email_erreur1 = "Votre adresse email est déjà utilisé par un membre";

                $i++;

            }


            //On vérifie la forme maintenant

            if (!preg_match("#^[a-z0-9A-Z._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email) || empty($email))

            {

                $email_erreur2 = "Votre nouvelle adresse E-Mail n'a pas un format valide";

                $i++;

            }

        }

        echo '<p><i>Vous êtes ici</i> : <a href="index.php">Index du forum</a> --> Modification du profil';

        echo '<h1>Modification d\'un profil</h1>';




        if ($i == 0) // Si $i est vide, il n'y a pas d'erreur

        {



            echo'<p>Cliquez <a href=".index.php">ici</a> 

        pour revenir à la page d accueil</p>';



            //On modifie la table



            $query=$db->prepare('UPDATE forum_membres

        SET  membre_mdp = :mdp, membre_email=:mail, membre_msn=:msn, membre_siteweb=:website,

        membre_signature=:sign, membre_localisation=:loc

        WHERE membre_id=:id');

            $query->bindValue(':mdp',$pass,PDO::PARAM_INT);

            $query->bindValue(':mail',$email,PDO::PARAM_STR);

            $query->bindValue(':id',$id,PDO::PARAM_INT);

            $query->execute();

            $query->CloseCursor();

        }

        else

        {

            echo'<h1>Modification interrompue</h1>';

            echo'<p>Une ou plusieurs erreurs se sont produites pendant la modification du profil</p>';

            echo'<p>'.$i.' erreur(s)</p>';

            echo'<p>'.$mdp_erreur.'</p>';

            echo'<p>'.$email_erreur1.'</p>';

            echo'<p>'.$email_erreur2.'</p>';


            echo'<p> Cliquez <a href="voirprofil.php?action=modifier">ici</a> pour recommencer</p>';

        }

    } //Fin du else
?>
<?php

  ?>

</div>

</body>

</html>

</html>
