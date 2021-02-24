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
    var converted = (nb / 6.56).toFixed(2)
    return "Montant en francs : " + nb + "\n(doit y avoir un retour chariot ici...)" + nb + " francs = " + converted + " €"
}