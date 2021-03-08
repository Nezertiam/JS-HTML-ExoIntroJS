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

    $nomsInput = [
        "nom" => "Nom", 
        "prenom" => "Prénom", 
        "ville" => "Ville"
    ];
    
    function genererInput($tabNomsInput){
        $str = "<form style='width:30%; display:block; background-color:lightgrey; padding-left:0.5em; padding-bottom: 1em; padding-top: 0.5em;'>";

        foreach($tabNomsInput as $label => $affichage){
            $str.= "
                    <div style='display:flex; flex-direction:column; width:70%;'>
                        <label for='".strtolower($label)."'>".$affichage."</label>
                        <input type='text' id='".strtolower($label)."'>
                    </div>
            ";
        }
        $str.= "
                </form>
        ";
        return $str;
    }

    echo genererInput($nomsInput);