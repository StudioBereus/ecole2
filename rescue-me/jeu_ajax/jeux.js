function addCell(tr, text) {
    var td = tr.insertCell();
    td.textContent = text;
    return td;
}

function titleCell(row, text) {
    var cell = document.createElement("th");
    cell.textContent = text;
    row.appendChild(cell);
}

function createCells(row, obj) {
    for (var key in obj) {
        addCell(row, obj[key]);
    }
}

function fillTable(result) {
    var table = document.getElementById("jeu");
    // create header 
    var thead = table.createTHead();
    var headerRow = thead.insertRow();
    for (var key in result[0]) {
        titleCell(headerRow, key);
    }
    var Body = table.createTBody();
    for (let i = 0; i < result.length; i++) {
        var BodyRow = Body.insertRow();
        createCells(BodyRow, result[i]);
    }
}


function recherche_MinPow(result) {
    let numjoueur = 0;

    let min = result[0].power;
    for (let i = 0; i < result.length; i++) {
        if (result[i].power < min) {
            min = result[i].power;
            numjoueur = i;
        }
    }


    console.log(numjoueur);
    txtnom = document.querySelector(".joueur");
    txtnom.textContent += " : " + result[numjoueur].name;

    // document.getElementById("max").appendChild(txtnom);
    let txtattack = document.createElement("p");
    txtattack.setAttribute("style", "font-size:1em; margin-bottom:10px;");
    txtattack.textContent = "played : " + result[numjoueur].played + " | victories : " + result[numjoueur].victory;
    document.getElementById("high").appendChild(txtattack);

    let txtpower = document.createElement("p");
    txtpower.setAttribute("style", "font-size:1em; margin-bottom:10px;color:#fff");

    txtpower.innerHTML = "Power : <br>" + result[numjoueur].power;
    document.getElementById("right").appendChild(txtpower);

}



function recherche_Attaque(result) {
    let numjoueur = 0;
    let max = result[0].attack;
    for (let i = 0; i < result.length; i++) {

        if (result[i].attack > max) {
            max = result[i].attack;
            numjoueur = i;
        }

    }
    console.log(numjoueur);
    txtnom = document.querySelector(".joueur");
    txtnom.textContent += " : " + result[numjoueur].name;

    // document.getElementById("max").appendChild(txtnom);
    let txtattack = document.createElement("p");
    txtattack.setAttribute("style", "font-size:0.8em; margin-bottom:10px;");
    txtattack.textContent = "played : " + result[numjoueur].played + " | victories : " + result[numjoueur].victory;
    document.getElementById("high").appendChild(txtattack);

    let power = document.createElement("p");
    power.setAttribute("style", "font-size: 1 em; color: rgb(24, 181, 243);text-align:center; margin-top:10px");

    power.innerHTML = "Power <br>" + result[numjoueur].power;
    document.getElementById("right").appendChild(power);

    let attaq = document.createElement("p");
    attaq.setAttribute("style", "font-size:1em; margin-bottom:10px;color:#fff;text-align:center; margin-top:10px");

    attaq.innerHTML = "Attack <br>" + result[numjoueur].attack;
    document.getElementById("right").appendChild(attaq);



    let defense = document.createElement("p");
    defense.setAttribute("style", "font-size:1em; color:#00bb00; margin-top:5px;text-align:center");

    defense.innerHTML = "Defense <br>" + result[numjoueur].armor;
    document.getElementById("right").appendChild(defense);

}


function MaxArmor(result2) {


    let numtemp = 0;
    let maxar = result2[0].armor;

    for (let i = 0; i < result2.length; i++) {


        if (result2[i].armor > maxar) {

            numtemp = i;

            maxar = result2[i].armor;

        }

    }
    console.log(numtemp);
    txtnom = document.querySelector(".joueur");
    txtnom.textContent += " : " + result2[numtemp].name;

    // document.getElementById("max").appendChild(txtnom);
    let txtattack = document.createElement("p");
    txtattack.setAttribute("style", "font-size:0.8em; margin-bottom:10px;");
    txtattack.textContent = "played : " + result2[numtemp].played + " | victories : " + result2[numtemp].victory;
    document.getElementById("high").appendChild(txtattack);

    let power = document.createElement("p");
    power.setAttribute("style", "font-size: 1 em; color: rgb(24, 181, 243);text-align:center; margin-top:10px");

    power.innerHTML = "Power <br>" + result2[numtemp].power;
    document.getElementById("right").appendChild(power);

    let attaq = document.createElement("p");
    attaq.setAttribute("style", "font-size:1em; margin-bottom:10px;color:#fff;text-align:center; margin-top:10px");

    attaq.innerHTML = "Attack <br>" + result2[numtemp].attack;
    document.getElementById("right").appendChild(attaq);



    let defense = document.createElement("p");
    defense.setAttribute("style", "font-size:1em; color:#00bb00; margin-top:5px;text-align:center");

    defense.innerHTML = "Defense <br>" + result2[numtemp].armor;
    document.getElementById("right").appendChild(defense);

}






//On cr??e un objet XMLHttpRequest
let xhr = new XMLHttpRequest();
//On initialise notre requ??te avec open()
xhr.open("GET", "jeux_de_roles.json");
//On veut une r??ponse au format JSON
xhr.responseType = "json";
//On envoie la requ??te
xhr.send();
//D??s que la r??ponse est re??ue...
xhr.onload = function() {
    //Si le statut HTTP n'est pas 200...
    if (xhr.status != 200) {
        //...On affiche le statut et le message correspondant
        alert("Erreur " + xhr.status + " : " + xhr.statusText);
        //Si le statut HTTP est 200, on affiche le nombre d'octets t??l??charg??s et la r??ponse
    } else {
        //alert(xhr.response.length + " octets  t??l??charg??s\n" + JSON.stringify(xhr.response));
        let monTab = xhr.response;
        console.log(monTab);
        fillTable(monTab);
        // recherche_Attaque(monTab);
        // recherche_MinPow(monTab)
        document.getElementById("btn_attaque").addEventListener('click', function() {
            recherche_Attaque(monTab);
        });
        document.getElementById("btn_defense").addEventListener('click', function() {
            MaxArmor(monTab);
        });
        // MaxArmor(monTab);

    }
};

//Si la requ??te n'a pas pu aboutir...
xhr.onerror = function() {
    alert("La requ??te a ??chou??");
};