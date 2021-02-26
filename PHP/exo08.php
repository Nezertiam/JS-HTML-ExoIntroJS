<h1>Exercice 8</h1>
<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre.
</p>


<h2>Résultat :</h2>


<?php

    function tableMultiplication($nb) {
        $resultat = "Table de $nb :<br>";
        for($i = 1; $i <= 10; $i++) {
            $resultat = $resultat."$nb × $i = ".$nb*$i."<br>";
        }
        return $resultat;
    }

    echo tableMultiplication(8);

?>