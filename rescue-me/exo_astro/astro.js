function afficheAnnee() {
    let opt = document.createElement("option");
    opt.textContent = "année";
    opt.value = "";
    document.getElementById("annee").appendChild(opt);

    for (let i = 1919; i <= 2003; i++) {
        let monOpt = new Option();
        monOpt.textContent = i;
        monOpt.value = i;
        document.getElementById("annee").options[i - 1918] = monOpt;
    }
}

afficheAnnee();

var tabSignes = ["Capricorne", "Verseau", "Poisson", "Belier", "Taureau", "Gémeaux", "Cancer", "Lion", "Vierge", "Balance", "Scorpion", "Sagittaire"];
var tabMois = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];

function afficherMois() {
    let opt = document.createElement("option");
    opt.textContent = "mois";
    opt.value = "";
    document.querySelector("#mois").appendChild(opt);

    for (let i = 0; i < 12; i++) {
        let monOpt = new Option();
        monOpt.textContent = tabMois[i];
        monOpt.value = i + 1;
        document.querySelector("#mois").appendChild(monOpt);
    }
}

afficherMois();

function afficherJour() {
    let opt = document.createElement("option");
    opt.textContent = "jour";
    opt.value = "";
    document.querySelector("#jour").appendChild(opt);

    for (let i = 1; i < 32; i++) {
        let monOpt = new Option();
        monOpt.textContent = i;
        monOpt.value = i;
        document.querySelector("#jour").appendChild(monOpt);
    }
}

afficherJour();

document.getElementById("titreP").innerHTML = "<u>Site de rencontre</u> par signe astrologique.";

function valNum(chaine) {
    let somme = 0;
    chaine = chaine.toUpperCase();
    for (let i = 0; i < chaine.length; i++) {
        let temp = chaine.charCodeAt(i) - 64;
        somme += temp;

    }
    return somme;

}
let test = valNum(document.getElementById("prenom").value);
console.log(test);

function calculerSigne(monmois) {
    return tabSignes[monmois - 1];

}

// const regex = /^[a-z]+[\-]?$/i;



const regex = /^[a-z]+(-[a-z]+)?$/i;


function formOK() {
    let nom = document.getElementById("nom").value;
    let prenom = document.querySelector("#prenom").value;
    let monJour = document.querySelector("#jour").value;
    let monMois = document.querySelector("#mois").value;
    let monAnnee = document.querySelector("#annee").value;
    if (regex.test(nom) && regex.test(prenom) && monJour != "" && monMois != "" && monAnnee != "") {

        return true;
    } else {
        return false;
    }

}



function afficherPseudo() {

    if (formOK() == true) {
        document.querySelector("#validation").disabled = false;
        let monsigne = calculerSigne(document.querySelector("#mois").value);
        let total = Number(valNum(document.querySelector("#nom").value)) + Number(valNum(document.querySelector("#prenom").value));
        let pseudo = monsigne + total;
        document.querySelector("#pseudo").value = pseudo;
        let img = document.createElement("img");
        let chaineImg = "./img_formu/" + monsigne + ".jpg";
        // img.setAttribute("src", chaineImg);
        // img.setAttribute("alt", monsigne);
        // document.getElementById("affiche").appendChild(img);
        document.body.setAttribute("style", "background-image:url(" + chaineImg + ");");

    } else {

        console.log("Remplir toutes les zones!");
    }


}

document.querySelectorAll("input[type=text]").forEach(element => { element.addEventListener("blur", afficherPseudo) });
document.querySelector("#mois").addEventListener("change", afficherPseudo);
document.querySelector("#jour").addEventListener("change", afficherPseudo);
document.querySelector("#annee").addEventListener("change", afficherPseudo);


function creerCookie(nomCookie, valueCookie) {
    let datejour = new Date();
    let dateExpire = new Date(datejour.getFullYear(), datejour.getMonth(), (datejour.getDate() + 1));
    dateExpire = dateExpire.toGMTString();

    document.cookie = nomCookie + "=" + valueCookie + ";expires=" + dateExpire + ";SameSite=Strict";
}

document.querySelector("#validation").addEventListener("click", function() {
    creerCookie("nom", document.querySelector("#nom").value);
    creerCookie("prenom", document.querySelector("#prenom").value);
    creerCookie("ville", document.querySelector("#ville").value);
    creerCookie("pseudo", document.querySelector("#pseudo").value);
    let madate = new Date(document.getElementById("annee").value, (document.getElementById("mois").value - 1), document.getElementById("jour").value);
    creerCookie("dateanniv", madate.toLocaleDateString('fr-FR'));
    window.location.assign("compteAstro.html");

})