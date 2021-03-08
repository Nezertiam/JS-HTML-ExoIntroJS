<h1>
    EXERCICE 1
</h1>
<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne<br>
    de caractère passée en argument en majuscules et en rouge.<br>
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;<br>
</p>

<h2>Résultat</h2>


<?php
    $montexte = "mon texte en paramètre";

    function convertirMajRouge($texte){
        $str = "<p style='color:red;'>".mb_strtoupper($texte)."</p>";
        return $str;
    }

    echo convertirMajRouge($montexte);