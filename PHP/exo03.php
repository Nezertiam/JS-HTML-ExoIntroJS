<h1>Exercice 3</h1>
<p>
    A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>


<h2>Résultat :</h2>
<?php

    function remplacerMot($mot1, $parMot2, $dansStr) {
        $nouvellePhrase = str_replace($mot1, $parMot2, $dansStr);
        return $dansStr."<br>".$nouvellePhrase;
    }

    $phrase1 = "Notre formation DL commence aujourd'hui";
    echo remplacerMot("aujourd'hui", "demain", $phrase1);

?>