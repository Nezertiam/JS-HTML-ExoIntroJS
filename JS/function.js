// EXERCICE 1
function compterChars(str) {
    let nbChar = str.length
    return "La phrase \"" + str + "\" contient " + nbChar + " caractères."
}
// EXERCICE 2
function compterMots(str) {
    let nbMot = (str.split(' ')).length
    return "La phrase \"" + str + "\" contient " + nbMot + " mots."
}


// EXERCICE 3
function remplacerMot(str, wordToChange, newWord) {
    let newStr = str.replace(wordToChange, newWord)
    return str + "<br>\n" + newStr
}


// EXERCICE 4
function isPalindrome(str) {
    let strSE = str.toLowerCase().split(' ').join('')
    let strISE = strSE.split('').reverse().join('')

    if(strSE === strISE){
        return "La phrase \"" + str + "\" est un palindrome"
    }
    else{
        return "La phrase \"" + str + "\" n'est pas un palindrome"
    }
}


// EXERCICE 5
function francToEuro(nb) {
    let converted = (nb / 6.55957).toFixed(2)
    return "Montant en francs : " + nb + "<br>\n" + nb + " francs = " + converted + " €"
}


// EXERCICE 6
function facture(prixHT, quant, tva) {
    let montantHT = prixHT * quant
    let montantTVA = montantHT * tva
    let total = (montantHT + montantTVA)
    let str = ""
    str += "Prix unitaire de l'article : " + prixHT + " € <br>\n"
    str += "Quantité : " + quant + "<br>\n"
    str += "Taux de TVA : " + tva + "<br>\n"
    str += "<br>\nLe montant de la facture à régler est de : " + total.toFixed(2) + " €"
    return str
}


// EXERCICE 7
function categorie(age) {
    if(age >= 12) {
        return "L'enfant qui a " + age + " ans appartient à la catégorie \"Cadet\"."
    }
        else if(age < 12 && age >= 10) {
            return "L'enfant qui a " + age + " ans appartient à la catégorie \"Minime\"."
        }
            else if(age < 10 && age >= 8) {
                return "L'enfant qui a " + age + " ans appartient à la catégorie \"Pupille\"."
            }
                else if(age < 8 && age >= 6) {
                    return "L'enfant qui a " + age + " ans appartient à la catégorie \"Poussin\"."
                }
                    else {
                        return "Trop jeune !"
                    }
}


// EXERCICE 8
function tableMultiplication(nb) {
    let str = "Table de " + nb + " :<br>\n"
    for(let i = 1; i <= 10; i++){
        str += nb + " &times; " + i + " = " + nb*i + "<br>\n";
    }
    return str;
}


// EXERCICE 9
function isImposable(age, sexe) {
    if(((sexe === "F" || sexe ==="f") && 18 <= age && age <= 35) || ((sexe === "H" || sexe ==="h") && 20 <= age)) {
        return "Age : " + age +"<br>\nSexe : " + sexe.toUpperCase() + "<br>\nLa personne est imposable."
    }
}


// EXERCICE 10
function renduMonnaie(apayer, versement) {
    let arendre = versement - apayer
    let str = "Montant à payer : " + apayer + " € <br>\n"
    str += "Montant versé : " + versement + " € <br>\n"
    str += "A rendre : " + arendre + " € <br>\n"
    str += "***************************************<br>\n"
    str += "Rendu de monnaie : <br>\n"
    let count = 0
    let i = 200

    while(i != 2) {
        count = 0
        if(arendre >= i) {
            while(arendre >= i) {
                arendre -= i
                count += 1
            }
            str += count + " billets de " + i + " € -- "
        }
        switch(i){
            case 200 :
                i = 100;
                break;
            case 100 :
                i = 50;
                break;
            case 50 :
                i = 20;
                break;
            case 20 :
                i = 10;
                break;
            case 10 :
                i = 5;
                break;
            case 5 :
                i = 2;
                break;
        }
    }
    
    while(i != 0){
        count = 0
        if(arendre >= i) {
            while(arendre >= i) {
                arendre -= i
                count += 1
            }
            str += count + " pièces de " + i + " € -- "
        }
        switch(i){
            case 2 :
                i = 1;
                break;
            case 1 :
                i = 0.50;
                break;
            case 0.5 :
                i = 0.20;
                break;
            case 0.2 :
                i = 0.10;
                break;
            case 0.1 :
                i = 0.05;
                break;
            case 0.05 :
                i = 0.02;
                break;
            case 0.02 :
                i = 0.01;
                break;
            default :
                i = 0;
        }
    }
    return str
}


// EXERCICE 11
function affichageTableau(tab) {
    let str = ""
    tab.forEach(element => str += "- " + element + "<br>\n")
    return str;
}


// Exercice 12
function salut() {
    let tab = {"Mickaël" : "FRA", "Virgile" : "ESP", "Marie-Claire" : "ENG", "Mawyn" : "FRA"}
    let tabLangues = {"FRA" : "Salut", "ESP" : "Hola", "ENG" : "Hello"}
    let str = ""
    
    for (const prop in tab) {
        let langue = tab[prop]
        if (langue in tabLangues) {
            str += tabLangues[langue] + " " + prop +"<br>\n"
        }
    }

    return str
}
