<h1>Exercice 5</h1>
<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>


<h2>Résultat :</h2>
<?php

    function francsToEuros($valeurEnFrancs){
        $phraseResultat = "Montant en francs : $valeurEnFrancs francs<br>";
        $valeurEnEuros = $valeurEnFrancs / 6.55957;
        $phraseResultat = $phraseResultat."$valeurEnFrancs francs = ".round($valeurEnEuros, 2)." €";
        return $phraseResultat;
    }

    echo francsToEuros(100);

?>