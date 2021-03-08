<h1>
    EXERCICE 8
</h1>
<p>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
    <br>
    Exemple :<br>
    repeterImage($url,4);
</p>

<h2>Résultat</h2>

<?php

    function repeterImage($source, $nb){
        $str = "<div style='display:flex'>";
        if($nb !== 0){
            for($i = 1; $i <= $nb; $i++){
                $str.= "<div style='flex:1'><img src='$source' style='width:100%;'></div>";
            }
        }
        $str.= "</div>";
        return $str;
    }

    echo repeterImage("http://my.mobirise.com/data/userpic/764.jpg",5);