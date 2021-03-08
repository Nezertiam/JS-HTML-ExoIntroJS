<h1>
    EXERCICE 5
</h1>
<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant<br>
    le nom des champs associés.<br>
    <br>
    Exemple :<br>
    $nomsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);<br>
</p>

<h2>Résultat</h2>

<?php

    $nomsInput = ["Nom", "Prénom", "Ville"];
    
    function afficherInput($tabNomsInput){
        $str = "<form style='width:30%; display:block; background-color:lightgrey; padding-left:0.5em; padding-bottom: 1em; padding-top: 0.5em;'>";

        foreach($tabNomsInput as $label){
            $str.= "<div style='display:flex; flex-direction:column; width:70%;'>";
            $str.= "<label for='".strtolower($label)."'>".$label."</label>";
            $str.= "<input type='text' id='".strtolower($label)."'>";
            $str.= "</div>";
        }

        $str.= "</form>";
        return $str;
    }

    echo afficherInput($nomsInput);