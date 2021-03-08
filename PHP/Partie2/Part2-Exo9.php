<h1>
    EXERCICE 9
</h1>
<p>
    Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs<br>
    en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>Résultat</h2>

<?php

    $elements = ["Homme", "Femme", "3 fois par jour"];

    function genererRadio(array $tab, string $famille){
        $str = "
            <form style='display:flex; flex-direction:column;'>
        ";

        foreach($tab as $key => $value){
            $str.= "
                <div>
                    <input type='radio' id='".$key."' name='".$famille."' value='".$key."'>
                    <label for='".$key."'>".$value."</label>
                </div>
            ";
        }

        $str.= "
            </form>
        ";
        return $str;
    }

    echo genererRadio($elements, "sexe");