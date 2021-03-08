<h1>
    EXERCICE 6
</h1>
<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de<br>
    valeurs.<br>
    <br>
    Exemple :<br>
    $elements = array("Monsieur","Madame","Mademoiselle");<br>
    alimenterListeDeroulante($elements);<br>
</p>

<h2>Résultat</h2>

<?php


    $genresInput = ["Monsieur", "Madame", "Mademoiselle"];
        
    function genererListeDeroulant(array $tab, string $famille){

        $str = "<form style='width:30%; display:block; background-color:lightgrey; padding-left:0.5em; padding-bottom: 1em; padding-top: 0.5em;'>";
    
        $str.= "
                    <div style='display:flex; flex-direction:column; width:70%;'>
                        <label for='$famille'>$famille</label>
                        <select name='$famille' id='$famille'>
                            <option value=''>-- Merci de sélectionner la bonne option --</option>
        ";
        foreach($tab as $value){
            $str.= "
                            <option value='".strtolower($value)."'>".$value."</option>
            ";
        }
        $str.= "
                        </select>
                    </div>
        ";
        $str.= "
                </form>
        ";
        return $str;
    }

    echo genererListeDeroulant($genresInput, "Genre");

    // COMME CA CET EXO EST FRANCHEMENT DEGUEULASSE, VIVE LES FEUILLES DE STYLES A PART HAHA !