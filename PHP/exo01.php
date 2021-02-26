<h1>Exercice 1</h1>
<p>
    Soit la phrase "Notre formation DL commence aujourd'hui" <br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).
</p>


<h2>Résultat :</h2>
<?php

    function compterChars($str) {
        $nbchars = strlen($str);
        return "La phrase \"$str\" contient $nbchars caractères.";
    }
    
    $phrase = "Notre formation DL commence aujourd'hui";
    echo compterChars($phrase);
    
?>