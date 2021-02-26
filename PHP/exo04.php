<h1>Exercice 4</h1>
<p>
    Ecrire un algorithme permettant de savoir si une phrase est un palindrome.
</p>


<h2>Résultat :</h2>
<?php
    function isPalindrome($str) {
        $strClean = strtolower(str_replace(' ', '', $str));
        $strCleanReversed = strrev($strClean);

        if($strClean === $strCleanReversed) {
            return "La phrase \"$str\" est un palindrome.";
        }
        else {
            return "La phrase \"$str\" n'est pas un palindrome.";
        }
    }

    $phrase2 = "Engage le jeu que je le gagne";
    echo isPalindrome($phrase2);

?>