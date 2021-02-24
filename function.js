function compterChars(str) {
    var nbChar = str.length
    return "La phrase \"" + str + "\" contient " + nbChar + " caractères."
}

function compterMots(str) {
    var nbMot = (str.split(' ')).length
    return "La phrase \"" + str + "\" contient " + nbMot + " mots."
}

function remplacerMot(str, wordToChange, newWord) {
    var newStr = str.replace(wordToChange, newWord)
    return str + "\n" + newStr
}

function isPalindrome(str) {
    var strSE = str.toLowerCase().split(' ').join('')
    var strISE = strSE.split('').reverse().join('')

    if(strSE == strISE){
        return "La phrase \"" + str + "\" est un palindrome"
    }
    else{
        return "La phrase \"" + str + "\" n'est pas un palindrome"
    }
}

function francToEuro(nb) {
    var converted = (nb / 6.55957).toFixed(2)
    return "Montant en francs : " + nb + "\n(doit y avoir un retour chariot ici...)" + nb + " francs = " + converted + " €"
}


// EXERCICE 6
function facture(prixHT, quant, tva) {
    var montantHT = prixHT * quant
    var montantTVA = montantHT * tva
    var total = (montantHT + montantTVA).toFixed(2)
    return "Prix unitaire de l'article : " + prixHT + " € " + "\nQuantité : " + quant + "\nTaux de TVA : " + tva + "\nLe montant de la facture à régler est de : " + total + " €"
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
    var str = "Table de " + nb + " :\n"
    for(var i = 1; i <= 10; i++){
        str += nb + " &times; " + i + " = " + nb*i + "\n";
    }
    console.log(str)
}


// EXERCICE 9
function isImposable(age, sexe) {
    if(((sexe === "F" || sexe ==="f") && 18 <= age && age <= 35) || ((sexe === "H" || sexe ==="h") && 20 <= age)) {
        return "Age : " + age +"\nSexe : " + sexe.toUpperCase() + "\nLa personne est imposable."
    }
}

console.log(isImposable(32, "f"))


// EXERCICE 10
function renduMonnaie(apayer, versement) {
    var arendre = versement - apayer
    var dix = Math.floor(arendre / 10)
    var cinq = Math.floor((arendre - (dix*10)) / 5)
    var deux = Math.floor((arendre - (cinq*5)) / 2)
    var un = Math.floor((arendre - (deux*2)) / 1)

    str = "Montant à payer : " + apayer + " €\nMontant versé : " + versement + " €\nA rendre : " + arendre + " €\n********************************\nRendue de monnaie :\n"
    if(dix > 1){
        str += dix + " billets de 10 € - "
    }
    else {
        str += dix + " billet de 10 € - "
    }
    

    if(cinq > 1){
        str += cinq + " billets de 5 € - "
    }
    else {
        str += cinq + " billet de 5 € - "
    }


    if(deux > 1){
        str += deux + " pièces de 2 € - "
    }
    else {
        str += deux + " pièce de 2 € - "
    }

    if(un > 1){
        str += un + " pièces de 1 € - "
    }
    else {
        str += un + " pièce de 1 € - "
    }

    return str;
}

console.log(renduMonnaie(152, 200))