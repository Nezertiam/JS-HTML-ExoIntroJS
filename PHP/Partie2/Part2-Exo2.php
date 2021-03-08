<h1>
    EXERCICE 2
</h1>
<p>
    Soit le tableau suivant : <br>
    <br>
    $capitales = array<br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
    <br>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br>
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une<br>
    fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);<br>
</p>

<h2>Résultat</h2>

<?php
    $capitales = array(
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome"
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
                    </tr>
                </thead>
                <tbody>
        ";

        foreach($tab as $pays => $ville){
            $str.= "
                    <tr>
                        <td style='border:1px solid black;'>".
                            mb_strtoupper($pays)."
                        </td>
                        <td style='border:1px solid black;'>
                            $ville
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

    echo afficherTableHTML($capitales);