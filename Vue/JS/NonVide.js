function NonVide() {
    if (document.getElementById("nom").value == '' ) {
        alert("champ nom vide   !");
        return false;
    }
    else if (document.getElementById("prenom").value == '' ){
        alert("champ prenom vide  !");
        return false;
    }
    else if ((document.getElementById("numero").value == '')) {
        alert("champ numero vide  !");
        return false;
    }
    else if (isNaN(document.getElementById("numero").value)){
        alert("Ce numéro n'est pas valide car il contient des lettres");
        return false;
    }
    else if (document.getElementById("mail").value == '' ){
        alert("champ mail vide  !");
        return false;
    }
    else if (document.getElementById("mdp").value == '' ){
        alert("champ mot de passe vide  !");
        return false;
    }
        else return true;
}

