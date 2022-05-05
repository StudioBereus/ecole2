function recupCookie(nomCookie) {
    let chaineCookie = document.cookie;
    var tabCookies = chaineCookie.split("; ");

    let resultat = "non trouvé";
    for (let i = 0; i < tabCookies.length; i++) {
        let paireCleValeur = tabCookies[i];
        let tabchaine = paireCleValeur.split("=");
        if (tabchaine[0] == nomCookie) {

            resultat = tabchaine[1];

        }
    }
    return resultat;

}

document.querySelector("#monnom").value = recupCookie("nom");
document.querySelector("#monprenom").value = recupCookie("prenom");
document.querySelector("#maville").value = recupCookie("ville");
document.querySelector("#naissance").value = recupCookie("dateanniv");

function nbJourAnniv() {
    let maDate = new Date();
    let tabdate = recupCookie("dateanniv").split('/');
    let dateNaissance = new Date(tabdate[2], tabdate[1] - 1, tabdate[0]);
    let dateAnniv = new Date(maDate.getFullYear(), dateNaissance.getMonth(), dateNaissance.getDate())

    if (dateAnniv < maDate) {
        dateAnniv = new Date(maDate.getFullYear() + 1, dateAnniv.getMonth(), dateAnniv.getDate());
    }

    let nbJour = Math.floor((dateAnniv - maDate) / (1000 * 60 * 60 * 24));
    return nbJour;
}

document.getElementById("nbjour").textContent = "Il reste " + nbJourAnniv() + " jours.";