<h1>Exercice 10</h1>
<p>
    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>


<h2>Résultat :</h2>


<?php

    function coupures($aPayer, $versement) {
        $resultat = "Montant à payer : $aPayer €<br>";
        $resultat .= "Montant versé : $versement €<br>";

        $aRendre = $versement - $aPayer;

        $resultat .="A rendre : $aRendre €<br>";
        $resultat .="*************************************<br>";
        $resultat .="Rendue de monnaie :<br>";

        $i = 200;

        while($i != 2) {
            $count = 0;
            if($aRendre >= $i) {
                while($aRendre >= $i) {
                    $aRendre -= $i;
                    $count += 1;
                }
                $resultat .= "$count billets de $i € -- ";
            }
            switch($i){
                case 200 :
                    $i = 100;
                    break;
                case 100 :
                    $i = 50;
                    break;
                case 50 :
                    $i = 20;
                    break;
                case 20 :
                    $i = 10;
                    break;
                case 10 :
                    $i = 5;
                    break;
                case 5 :
                    $i = 2;
                    break;
            }
        }

        while($i != 0){
            $count = 0;
            if($aRendre >= $i) {
                while($aRendre >= $i) {
                    $aRendre -= $i;
                    $count += 1;
                }
                $resultat .= "$count pièces de $i € -- ";
            }
            switch($i){
                case 2 :
                    $i = 1;
                    break;
                case 1 :
                    $i = 0.50;
                    break;
                case 0.5 :
                    $i = 0.20;
                    break;
                case 0.2 :
                    $i = 0.10;
                    break;
                case 0.1 :
                    $i = 0.05;
                    break;
                case 0.05 :
                    $i = 0.02;
                    break;
                case 0.02 :
                    $i = 0.01;
                    break;
                default :
                    $i = 0;
            }
        }

        return trim($resultat, " -- ");
    }

    echo coupures(152, 200);
?>