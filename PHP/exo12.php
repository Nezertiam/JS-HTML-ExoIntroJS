<h1>Exercice 12</h1>
<p>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
    Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2>Résultat :</h2>

<?php

    $tableauLangues = [
        "Mickaël" => "FRA",
        "Virgile" => "ESP",
        "Marie-Claire" => "ENG"
    ];

    function salut($tab) {
        $str = "";
        foreach($tab as $prenom => $langue) {
            switch($langue){
                case "FRA" : $salut = "Salut"; break;
                case "ESP" : $salut = "Hola"; break;
                case "ENG" : $salut = "Hello"; break;
                default : return "Langue mal ou non renseignée";
            };
            $str .= "$salut $prenom<br>";
        }
        return $str."<br>";
    }

    echo salut($tableauLangues);

    function salutSort($tab) {
        ksort($tab);
        $str = "";
        foreach($tab as $prenom => $langue) {
            switch($langue){
                case "FRA" : $salut = "Salut"; break;
                case "ESP" : $salut = "Hola"; break;
                case "ENG" : $salut = "Hello"; break;
                default : return "Langue mal ou non renseignée";
            };
            $str .= "$salut $prenom<br>";
        }
        return $str."<br>";
    }

    echo salutSort($tableauLangues);
?>