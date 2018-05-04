<?php
/**
 * Vue : Header HTML
 */
?>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Vue/header.css"/>
</head>



    <header>

        <img src="Vue/image/bandeHaut.jpg" id="bande"/>
        <a href="index.php?cible=style"><img src="Vue/image/AtHomeTransparent.png" id="logo"/></a>

        <nav>
            <ul id="menu">
                <li><a href="index.php?cible=plan">Ma Maison</a>
                    <ul>
                        <li><a href="#">Plan</a></li>
                        <li><a href="index.php?cible=page 16">capteurs</a></li>
                        <li><a href="#">statistiques</a></li>
                    </ul>
                </li>
                <li><a href="index.php?cible=shop">Magasin</a>
                    <ul>
                        <li><a href="#">Capteurs</a></li>
                        <li><a href="#">factures</a></li>
                    </ul>
                </li>
                <li><a href="index.php?cible=profil">Mon Compte</a>
                    <ul>
                        <li><a href="index.php?cible=profil">profil</a></li>
                        <li><a href="#">Gestion capteurs</a></li>
                        <li><a href="#">Gestion utilisateurs</a></li>
                        <li><a href="#">Deconnexion</a></li>
                    </ul>
                </li>
                <li><a href="#">Contactez Nous</a>
                    <ul>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>

</nav>
</header>