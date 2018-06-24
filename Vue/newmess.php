<head>
    <meta charset="utf-8"/>
    <title>Nouveau Message</title>
    <link rel="stylesheet"/>
    <script src="Vue/JS/NonVide.js"></script>
    <link rel="stylesheet" href="css/forum.css"/>
</head>

<body>
<p class="titre">FORUM</p>
<p>
    <br>
    <br>
    <br>
    <br>
</p>

<div class="block">
    <form method="post" action="Vue/liste.php">
        <p>
            <label for="titre topic">Titre du topic :</label>
            <input type="text" name="titre" size="60" maxlength="50"/>
        </p>

        <p>
            <label for="message">Message :</label>
            <textarea name="message" rows="10" cols="50"></textarea>
        </p>
        <input type="submit" name="Valider">
    </form>
</div>


</body>