<h1>
    EXERCICE 4
</h1>
<p>
    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le<br>
    lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel<br>
    onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
    <br>
    https://fr.wikipedia.org/wiki/<br>
    <br>
    Le tableau passé en argument sera le suivant :<br>
    <br>
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");<br>
</p>

<h2>Résultat</h2>

<?php

    $capitales = array (
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome",
        "Espagne"=>"Madrid"
    );

    function afficherTableHTML($tab){
        ksort($tab);

        $str = "
            <table>
                <thead>
                    <tr>
                        <th style='border:1px solid black;'>
                            <b> PAYS </b>
                        </th>
                        <th style='border:1px solid black;'>
                            <b> CAPITALE </b>
                        </th>
                        <th style='border:1px solid black;'>
                            <b> LIEN </b>
                        </th>
                    </tr>
                </thead>
                <tbody>
        ";

        foreach($tab as $pays => $ville){
            $str.= "
                    <tr>
                        <td style='border:1px solid black;'>
                            $pays
                        </td>
                        <td style='border:1px solid black;'>
                            $ville
                        </td>
                        <td style='border:1px solid black;'>
                            <a href='https://fr.wikipedia.org/wiki/".wiki($ville)."'>Lien</a>
                        </td>
                    </tr>
            ";
        }

        $str.= "
                </tbody>
            </table>
        ";
        return $str;

    }

    function wiki($ville){
        switch($ville){
            case "Washington" : return $ville."_(district_de_Columbia)"; break;
            default : return $ville;
        }
    }

    echo afficherTableHTML($capitales);