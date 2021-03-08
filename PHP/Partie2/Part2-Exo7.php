<h1>
    EXERCICE 7
</h1>
<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans<br>
    le tableau associatif si la case est cochée ou non.<br>
    <br>
    Exemple :<br>
    genererCheckbox($elements);<br>
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
</p>

<h2>Résultat</h2>

<?php

    $elements = ["Choix 1", "Choix 2", "Choix 3"];

    function genererCheckbox($tab){
        $str = "<div style='display:flex; flex-direction:column;'>";
        $i = 1;
        foreach($tab as $choix){
            $str.= "<div>";
            $str.= "<input type='checkbox' id='choix".$i."' name='choix".$i."'><label for='choix".$i."'>".$choix;
            $i++;
            $str.= "</div>";
        }
        $str.= "</div>";
        return $str;
    }

    echo genererCheckbox($elements);