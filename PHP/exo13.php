<h1>Exercice 13</h1>
<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
    coefficient). Elle devra être affichée avec 2 décimales
</p>


<h2>Résultat :</h2>


<?php

    $tabNotes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

    function moyenneG($tab){
        $resultat = "Les notes obtenues par l'élève sont : ".implode(" ", $tab)."<br>";
        $resultat .= "Sa moyenne générale est donc de : ";
        $moyenne = array_sum($tab)/count($tab);
        $resultat .= round($moyenne);
        return $resultat;
    }

    echo moyenneG($tabNotes);
?>