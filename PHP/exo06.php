<h1>Exercice 6</h1>
<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>


<h2>Résultat :</h2>

<?php

    function facture($prixHT, $quant, $tauxTVA) {
        $resultat = "Prix unitaire de l'article = $prixHT €<br>";
        $resultat = $resultat."Quantité : $quant<br>";
        $resultat = $resultat."Taux de TVA : $tauxTVA<br>";

        $prixTTC = ($prixHT*$quant)*(1+$tauxTVA);
        $resultat = $resultat."Le montant de la facture à régler est de : ".round($prixTTC, 2)." €";
        return $resultat;
    }

    $prix = 9.99;
    $quant = 5;
    $TVA = 0.2;
    echo facture($prix, $quant, $TVA);

?>