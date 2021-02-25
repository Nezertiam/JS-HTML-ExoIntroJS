function compterChars(str) {
    let nbChar = str.length
    return "La phrase \"" + str + "\" contient " + nbChar + " caractères."
}

function compterMots(str) {
    let nbMot = (str.split(' ')).length
    return "La phrase \"" + str + "\" contient " + nbMot + " mots."
}

function remplacerMot(str, wordToChange, newWord) {
    let newStr = str.replace(wordToChange, newWord)
    return str + "\n" + newStr
}

function isPalindrome(str) {
    let strSE = str.toLowerCase().split(' ').join('')
    let strISE = strSE.split('').reverse().join('')

    if(strSE == strISE){
        return "La phrase \"" + str + "\" est un palindrome"
    }
    else{
        return "La phrase \"" + str + "\" n'est pas un palindrome"
    }
}

function francToEuro(nb) {
    let converted = (nb / 6.55957).toFixed(2)
    return "Montant en francs : " + nb + "\n" + nb + " francs = " + converted + " €"
}


// EXERCICE 6
function facture(prixHT, quant, tva) {
    let montantHT = prixHT * quant
    let montantTVA = montantHT * tva
    let total = (montantHT + montantTVA).toFixed(2)
    let str = ""
    str += "Prix unitaire de l'article : " + prixHT + " € \n"
    str += "Quantité : " + quant + "\n"
    str += "Taux de TVA : " + tva + "\n"
    str += "\nLe montant de la facture à régler est de : " + total + " €"
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
                        return "Si la catégorie n'est pas gérée, merci de le préciser."
                    }
}


// EXERCICE 8
function tableMultiplication(nb) {
    let str = "Table de " + nb + " :\n"
    for(let i = 1; i <= 10; i++){
        str += nb + " &times; " + i + " = " + nb*i + "\n";
    }
    return str;
}


// EXERCICE 9
function isImposable(age, sexe) {
    if(((sexe === "F" || sexe ==="f") && 18 <= age && age <= 35) || ((sexe === "H" || sexe ==="h") && 20 <= age)) {
        return "Age : " + age +"\nSexe : " + sexe.toUpperCase() + "\nLa personne est imposable."
    }
}


// EXERCICE 10
function renduMonnaie(apayer, versement) {
    let arendre = versement - apayer
    let str = "Montant à payer : " + apayer + " € \n"
    str += "Montant versé : " + versement + " € \n"
    str += "A rendre : " + arendre + " € \n"
    str += "***************************************\n"
    str += "Rendu de monnaie : \n"
    let count = 0
    let i = 100

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


