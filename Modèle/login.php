<?php
function verify_User($email) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $result = $bdd->prepare("SELECT * FROM utilisateur WHERE mail=:email", [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $result->execute([
        ':email' => $email,
    ]);
    return $result->fetchAll(PDO::FETCH_ASSOC)[0];
}
