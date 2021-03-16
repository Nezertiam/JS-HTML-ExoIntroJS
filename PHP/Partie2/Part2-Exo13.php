<h1>
    EXERCICE 13
</h1>
<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et<br>
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en<br>
plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule<br>
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>
v1 => "Peugeot","408",5<br>
v2 => "Citroën","C4",3<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de<br>
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments<br>
Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.<br>
</p>

<h2>Résultat</h2>

<?php

    require "class13/Voiture.php";

    $v1 = new Voiture("Peugeot", "408", 5);
    $v2 = new Voiture("Citroën", "C4", 3);

    echo $v1->accelerer(50);
    echo $v1->demarrer();
    echo $v1->demarrer();
    echo $v1->accelerer(50);
    echo $v1->accelerer(50);
    echo $v1->stopper();
    echo $v1->ralentir(100);
    echo $v1->stopper();
