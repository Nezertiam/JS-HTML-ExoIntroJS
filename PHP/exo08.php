<h1>Exercice 8</h1>
<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre.
</p>


<h2>Résultat :</h2>


<?php

    function tableMultiplicationFor($nb) {
        $resultat = "Table de $nb :<br>";
        for($i = 1; $i <= 10; $i++) {
            $resultat .= "$nb × $i = ".$nb*$i."<br>";
        }
        return $resultat;
    }

    echo tableMultiplicationFor(8);

    function tableMultiplicationWhile($nb) {
        $resultat = "Table de $nb :<br>";
        $i = 1;
        while($i <= 10) {
            $resultat .= "$nb × $i = ".$nb*$i."<br>";
            $i++;
        }
        return $resultat;
    }

    echo TableMultiplicationWhile(7);

?>