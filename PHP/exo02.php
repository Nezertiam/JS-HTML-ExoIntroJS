<h1>Exercice 2</h1>
<p>
    A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
    contenus dans celle-ci.
</p>


<h2>Résultat :</h2>
<?php

    function compterMots($str) {
        $nbMots = str_word_count($str);
        return "La phrase \"$str\" contient $nbMots mots.";
    }

    $phrase = "Notre formation DL commence aujourd'hui";
    echo compterMots($phrase);

?>