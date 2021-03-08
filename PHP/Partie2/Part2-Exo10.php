<h1>
    EXERCICE 10
</h1>
<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire<br>
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail,<br>
    ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :<br>
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de<br>
    validation (submit).
</p>

<h2>Résultat</h2>

<?php

    require("functions.php");

    $inputNames = [
        "nom" => "Nom",
        "prenom" => "Prénom",
        "email" => "Adresse e-mail",
        "ville" => "Ville"
    ];

    $sexes = [
        "Masculin",
        "Féminin",
        "Autres"
    ];

    $formations = [
        "Développeur Logiciel",
        "Designer Web",
        "Intégrateur",
        "Chef de projet"
    ];

    echo "<div style='width:20%;'>".genererInput($inputNames)."</div>";

    echo "Civilité :";
    echo "<div style='width:20%;'>".genererRadio($sexes, "sexes")."</div>";

    echo "Formation souhaiter :";
    echo "<div style='width:20%;'>".genererMenuDeroulant($formations, "formations")."</div>";

    echo "<input type='submit'>";