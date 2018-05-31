function NonVide() {
    if (document.getElementById("champs").value == '' ) {

        alert("champs vide  !");
        return false;
    }
    else if (!isNaN(document.getElementById("champs").value)){
// return isNan return True si ce n'est pas un nombre
        alert("Ce nom n'est pas valide car il n'a pas de lettre");
        return false;

    }

        else return true;
}

