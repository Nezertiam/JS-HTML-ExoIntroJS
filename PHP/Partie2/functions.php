<?php
    

    function genererInput($tabNomsInput){
        $str = "<form style='width:100%; display:block; background-color:lightgrey; padding-left:0.5em; padding-bottom: 1em; padding-top: 0.5em;'>";

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



    function genererMenuDeroulant(array $tab, string $famille){

        $str = "<form style='width:100%; display:block; background-color:lightgrey; padding-left:0.5em; padding-bottom: 1em; padding-top: 0.5em;'>";

        $str.= "
                    <div style='display:flex; flex-direction:column; width:70%;'>
                        <label for='$famille'>$famille</label>
                        <select name='$famille' id='$famille'>
                            <option value=''>-- Merci de sélectionner la bonne option --</option>
        ";
        foreach($tab as $key => $value){
            $str.= "
                            <option value='".strtolower($key)."'>".$value."</option>
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