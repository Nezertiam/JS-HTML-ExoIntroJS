<h1>Exercice 9</h1>
<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>


<h2>Résultat :</h2>


<?php

    function isImposable($age, $sexe) {
        $resultat = "Age : $age<br>";
        $resultat = $resultat."Sexe : ".strtoupper($sexe)."<br>";

        if((($sexe === "f" || $sexe ==="F") && (18 <= $age && $age <= 35)) || (($sexe === "h" || $sexe ==="H") && $age > 20)) {
            $resultat = $resultat."La personne est imposable.<br>";
        }
        else{
            $resultat = $resultat."La personne n'est PAS imposable.<br>";
        }

        return $resultat;
    }

    echo isImposable(32, "f");

?>