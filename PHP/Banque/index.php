<?php

    require "Titulaires.php";
    require "Comptes.php";

    $tit1 = new Titulaires("NHEK", "Mawyn", "1999-02-20", "Erstein, 67150 FRANCE");
    $tit2 = new Titulaires("MURMANN", "Mickaël", "1984-01-16", "Strasbourg, 67000 FRANCE");

    // Mes comptes
    $compte1 = new Comptes("Compte épargne", 0, "€", $tit1);
    $compte2 = new Comptes("Compte courant", 0, "€", $tit1);

    // Vos comptes
    $compte3 = new Comptes("Compte courant", 450, "€", $tit2);
    $compte4 = new Comptes("Livret A", 3000, "€", $tit2);
    $compte5 = new Comptes("Permis B... Lol", 0, "$", $tit2); // Ah... Faudrait pouvoir convertir lors des transferts...

    echo $tit1;
    echo $compte2;

    echo "<br>******************************************<br><br>";

    echo "<b>Je m'offre 3000 euros sur mon compte courant</b><br>";
    $compte2->crediter(3000);

    echo $tit1;
    echo $compte2;

    echo "<br>******************************************<br><br>";

    echo "<b>J'espionne vos comptes</b><br>";
    echo $tit2;

    echo "<br>******************************************<br><br>";

    echo "<b>On vous a débité de 369.78€ ?</b><br>";
    echo "<b>Même les débuts de mois sont compliqués... Mais où va la France ?</b><br>";
    $compte3->debiter(369.78);
    echo $compte3;

    echo "<br>******************************************<br><br>";

    echo "<b>Je vous en vole un peu, moi aussi je suis à la dèche...</b><br>";
    $compte4->virement($compte1, 3000);

    echo $compte1;
    echo $compte4;