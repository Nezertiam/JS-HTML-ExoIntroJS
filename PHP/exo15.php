<h1>Exercice 15</h1>
<p>
    Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
    <br>
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>
<h2>Résultat :</h2>


<?php

    require "Personne.php";

    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

    echo $p1;
    echo $p2;
?>