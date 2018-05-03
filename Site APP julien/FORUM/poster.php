
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 23/04/2018
 * Time: 12:07
 */
<script>
    function bbcode(bbdebut, bbfin)
    {
        var input = window.document.formulaire.message;
        input.focus();
        if(typeof document.selection !== 'undefined')
        {
            var range = document.selection.createRange();
            var insText = range.text;
            range.text = bbdebut + insText + bbfin;
            range = document.selection.createRange();
            if (insText.length === 0)
            {
                range.move('character', -bbfin.length);
            }
            else
            {
                range.moveStart('character', bbdebut.length + insText.length + bbfin.length);
            }
            range.select();
        }
        var pos;
        else if(typeof input.selectionStart !== 'undefined')
        {
            var start = input.selectionStart;
            var end = input.selectionEnd;
            insText = input.value.substring(start, end);
            input.value = input.value.substr(0, start) + bbdebut + insText + bbfin + input.value.substr(end);

            if (insText.length === 0)
            {
                pos = start + bbdebut.length;
            }
            else
            {
                pos = start + bbdebut.length + insText.length + bbfin.length;
            }
            input.selectionStart = pos;
            input.selectionEnd = pos;
        }

        else
        {
            var re = new RegExp('^[0-9]{0,3}$');
            while(!re.test(pos))
            {
                pos = prompt("insertion (0.." + input.value.length + "):", "0");
            }
            if(pos > input.value.length)
            {
                pos = input.value.length;
            }
            insText = prompt("Veuillez taper le texte");
            input.value = input.value.substr(0, pos) + bbdebut + insText + bbfin + input.value.substr(pos);
        }
    }
    function smilies(img)
    {
        window.document.formulaire.message.value += '' + img + '';
    }
</script>


<?php

session_start();

$titre="Poster";

$balises = true;

include("identifiants.php");

include("debut.php");

include("menu.php");

?>


<?php

//Qu'est ce qu'on veut faire ? poster, répondre ou éditer ?

$action = (isset($_GET['action']))?htmlspecialchars($_GET['action']):'';


//Il faut être connecté pour poster !

if ($id==0) erreur(ERR_IS_CO);


//Si on veut poster un nouveau topic, la variable f se trouve dans l'url,

//On récupère certaines valeurs

if (isset($_GET['f']))

{

    $forum = (int) $_GET['f'];

    $query= $db->prepare('SELECT forum_name, auth_view, auth_post, auth_topic, auth_annonce, auth_modo

    FROM forum_forum WHERE forum_id =:forum');

    $query->bindValue(':forum',$forum,PDO::PARAM_INT);

    $query->execute();

    $data=$query->fetch();

    echo '<p><i>Vous êtes ici</i> : <a href="index.php">Index du forum</a> --> 

    <a href="voirforum.php?f='.$data['forum_id'].'">'.stripslashes(htmlspecialchars($data['forum_name'])).'</a>

    --> Nouveau topic</p>';




}



//Sinon c'est un nouveau message, on a la variable t et

//On récupère f grâce à une requête

elseif (isset($_GET['t']))

{

    $topic = (int) $_GET['t'];

    $query=$db->prepare('SELECT topic_titre, forum_topic.forum_id,

    forum_name, auth_view, auth_post, auth_topic, auth_annonce, auth_modo

    FROM forum_topic

    LEFT JOIN forum_forum ON forum_forum.forum_id = forum_topic.forum_id

    WHERE topic_id =:topic');

    $query->bindValue(':topic',$topic,PDO::PARAM_INT);

    $query->execute();

    $data=$query->fetch();

    $forum = $data['forum_id'];


    echo '<p><i>Vous êtes ici</i> : <a href="index.php">Index du forum</a> --> 

    <a href="voirforum.php?f='.$data['forum_id'].'">'.stripslashes(htmlspecialchars($data['forum_name'])).'</a>

    --> <a href="voirtopic.php?t='.$topic.'">'.stripslashes(htmlspecialchars($data['topic_titre'])).'</a>

    --> Répondre</p>';

}



//Enfin sinon c'est au sujet de la modération(on verra plus tard en détail)

//On ne connait que le post, il faut chercher le reste

elseif (isset ($_GET['p']))

{

    $post = (int) $_GET['p'];

    $query=$db->prepare('SELECT post_createur, forum_post.topic_id, topic_titre, forum_topic.forum_id,

    forum_name, auth_view, auth_post, auth_topic, auth_annonce, auth_modo

    FROM forum_post

    LEFT JOIN forum_topic ON forum_topic.topic_id = forum_post.topic_id

    LEFT JOIN forum_forum ON forum_forum.forum_id = forum_topic.forum_id

    WHERE forum_post.post_id =:post');

    $query->bindValue(':post',$post,PDO::PARAM_INT);

    $query->execute();

    $data=$query->fetch();


    $topic = $data['topic_id'];

    $forum = $data['forum_id'];



    echo '<p><i>Vous êtes ici</i> : <a href="index.php">Index du forum</a> --> 

    <a href="voirforum.php?f='.$data['forum_id'].'">'.stripslashes(htmlspecialchars($data['forum_name'])).'</a>

    --> <a href="voirtopic.php?t='.$topic.'">'.stripslashes(htmlspecialchars($data['topic_titre'])).'</a>

    --> Modérer un message</p>';

}

//$query->CloseCursor();

?>


<?php
echo'fifi';
switch($action)

{

    case "repondre": //Premier cas : on souhaite répondre

//Ici, on affiche le formulaire de réponse

        break;



    case "nouveautopic": //Deuxième cas : on souhaite créer un nouveau topic

//Ici, on affiche le formulaire de nouveau topic

        break;



//D'autres cas viendront s'ajouter là plus tard :p

/**

    default: //Si jamais c'est aucun de ceux-là, c'est qu'il y a eu un problème :o

        echo'<h2>Cette action est impossible</h2>';
*/


} //Fin du switch

?>


<?php

switch($action)

{

case "repondre": //Premier cas on souhaite répondre

    ?>

    <h1>Poster une réponse</h1>



    <form method="post" action="postok.php?action=repondre&amp;t=<?php echo $topic ?>" name="formulaire">



        <fieldset><legend>Mise en forme</legend>

            <input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />

            <input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />

            <input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />

            <input type="button" id="lien" name="lien" value="Lien" onClick="javascript:bbcode('[url]', '[/url]');return(false)" />

        </fieldset>



        <fieldset><legend>Message</legend><textarea cols="80" rows="8" id="message" name="message"></textarea></fieldset>



        <input type="submit" name="submit" value="Envoyer" />

        <input type="reset" name = "Effacer" value = "Effacer"/>

        </p></form>

    <?php

    break;



case "nouveautopic":

?>



<h1>Nouveau topic</h1>

<form method="post" action="postok.php?action=nouveautopic&amp;f=<?php echo $forum ?>" name="formulaire">



    <fieldset><legend>Titre</legend>

        <input type="text" size="80" id="titre" name="titre" /></fieldset>



    <fieldset><legend>Mise en forme</legend>

        <input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />

        <input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />

        <input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />

        <input type="button" id="lien" name="lien" value="Lien" onClick="javascript:bbcode('[url]', '[/url]');return(false)" />


    <fieldset><legend>Message</legend>

        <textarea cols="80" rows="8" id="message" name="message"></textarea>

        <label><input type="radio" name="mess" value="Annonce" />Annonce</label>

        <label><input type="radio" name="mess" value="Message" checked="checked" />Topic</label>

    </fieldset>

    <p>

        <input type="submit" name="submit" value="Envoyer" />

        <input type="reset" name = "Effacer" value = "Effacer" /></p>

</form>

<?php

break;



//D'autres cas viendront s'ajouter ici par la suite

?>


<?php

    default: //Si jamais c'est aucun de ceux là c'est qu'il y a eu un problème :o

        echo'<p>Cette action est impossible</p>';

} //Fin du switch

?>

</div>

</body>

</html>


<?php

function code($texte)

{
    //Mise en forme du texte

//gras

    $texte = preg_replace('`\[g\](.+)\[/g\]`isU', '<strong>$1</strong>', $texte);

//italique

    $texte = preg_replace('`\[i\](.+)\[/i\]`isU', '<em>$1</em>', $texte);

//souligné

    $texte = preg_replace('`\[s\](.+)\[/s\]`isU', '<u>$1</u>', $texte);

//lien

    $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

//etc., etc.
    $texte = preg_replace('`\[quote\](.+)\[/quote\]`isU', '<div id="quote">$1</div>', $texte);

//On retourne la variable texte

    return $texte;

}

?>

