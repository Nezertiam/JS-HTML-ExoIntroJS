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

        return trim($resultat, " -- ")."<br><br>";
    }

    echo coupures(152, 200);

    function coupuresbis($aPayer, $versement) {
        $resultat = "Montant à payer : $aPayer €<br>";
        $resultat .= "Montant versé : $versement €<br>";

        $aRendre = $versement - $aPayer;

        $resultat .="A rendre : $aRendre €<br>";
        $resultat .="*************************************<br>";
        $resultat .="Rendue de monnaie :<br>";

        if($aRendre != 0) {
            $count = intdiv($aRendre, 200);
            $aRendre -= $count * 200;
            if($count != 0) {
                $resultat .= "$count billets de 200€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 100);
            $aRendre -= $count * 100;
            if($count != 0) {
                $resultat .= "$count billets de 100€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 50);
            $aRendre -= $count * 50;
            if($count != 0) {
                $resultat .= "$count billets de 50€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 20);
            $aRendre -= $count * 20;
            if($count != 0) {
                $resultat .= "$count billets de 20€ -- ";
           }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 10);
            $aRendre -= $count * 10;
            if($count != 0) {
                $resultat .= "$count billets de 10€ -- ";
           }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 5);
            $aRendre -= $count * 5;
            if($count != 0) {
                $resultat .= "$count billets de 5€ -- ";
            }
          }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 2);
            $aRendre -= $count * 2;
            if($count != 0) {
                $resultat .= "$count billets de 2€ -- ";
            }
        }

        if($aRendre != 0) {
            $count = intdiv($aRendre, 1);
            $aRendre -= $count * 1;
            if($count != 0) {
                $resultat .= "$count billets de 1€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 0.5);
            $aRendre -= $count * 0.5;
            if($count != 0) {
                $resultat .= "$count billets de 0.50€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 0.20);
            $aRendre -= $count * 0.20;
            if($count != 0) {
                $resultat .= "$count billets de 0.20€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 0.10);
            $aRendre -= $count * 0.10;
            if($count != 0) {
                $resultat .= "$count billets de 0.10€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 0.05);
            $aRendre -= $count * 0.05;
            if($count != 0) {
                $resultat .= "$count billets de 0.05€ -- ";
            }  
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 0.02);
            $aRendre -= $count * 0.02;
            if($count != 0) {
                $resultat .= "$count billets de 0.02€ -- ";
            }
        }
        
        if($aRendre != 0) {
            $count = intdiv($aRendre, 0.01);
            $aRendre -= $count * 0.01;
            if($count != 0) {
                $resultat .= "$count billets de 0.01€ -- ";
            }
        }
        

        return trim($resultat, " -- ")."<br><br>";
    }

    echo coupuresbis(152, 200);
?>