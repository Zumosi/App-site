<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 25/04/2018
 * Time: 12:13
 */

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


//On retourne la variable texte

    return $texte;

}

?>