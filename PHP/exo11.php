<h1>Exercice 11</h1>
<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre de marques de voitures présentes dans le tableau.
    Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>


<h2>Résultat :</h2>
<?php

    function affTableau($tab){
        foreach($tab as $marques) {
            echo "<li>".$marques."</li>";
        }
    }
    $tabVoitures = ["Peugeot", "Renault", "BMW", "Mercedes"];

?>
<h5>Il y a <?php echo count($tabVoitures) ?> marques de voitures dans le tableau :</h5>
<ul>
    <?php
        affTableau($tabVoitures);
    ?>
</ul>